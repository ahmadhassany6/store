<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('home.index', compact('categories'));
    }

    public function products(Category $category = null)
    {
        $parentDepth =  - 1;
        $childDepthCategories = [];
        if($category){
            $products = $category->products()->paginate(6);
        }
        else{
            $categories = Category::where('depth', '=', '0')->get();
            $products = Product::paginate(6);
        }
        $reviews = [];
        $stars = [];
        foreach ($products as $product){
            $reviewsList = $product->reviews;
            $reviews[$product->id] = $reviewsList->count();
            $totalStars = $reviewsList->sum('stars');
            if($reviews[$product->id] != 0){
                $stars[$product->id] = (Integer)($totalStars / $reviews[$product->id]);
            }
            else{
                $stars[$product->id] = 5;
            }
        }
        if($category){
            $parentDepth = $category->depth - 1;
            $childDepth = $category->depth + 1;
            $parentDepthCategories = null;
            $parentID = $category->parent_id;
            if($category->depth != 0){
                $parentDepthCategories = Category::where('depth', '=', $parentDepth)->get();
            }

            $categories = Category::where('depth', '=', $category->depth)->where('parent_id','=', $category->parent_id)->get();
            $childDepthCategories = Category::where('depth', '=',  $childDepth)->where('parent_id','=', $category->id)->get();

            return view('home.products',compact('categories','products','stars','reviews','parentDepth','parentID','parentDepthCategories', 'childDepthCategories'));
        }

        return view('home.products',compact('categories','products','stars','reviews','parentDepth','childDepthCategories'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }

    public function product(Product $product)
    {
        $primary = $product->image()->where('is_primary',1)->get();
        $images = $product->image()->where('is_primary',0)->get();
        $OptionVariantsList = $product->optionVariant()->get()->groupBy('variant_id');
        $OptionVariantsList = OrderController::getAllOptionVariant($OptionVariantsList,$product->id);

        return view('home.single',compact('primary','images','product' , 'OptionVariantsList'));
    }
}
