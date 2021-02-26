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
        $categories = Category::all();
        if($category){
            $products = $category->products()->paginate(6);
        }
        else{
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

        return view('home.products',compact('categories','products','stars','reviews'));
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
        return view('home.single');
    }
}
