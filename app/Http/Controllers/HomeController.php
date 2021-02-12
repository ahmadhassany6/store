<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function products()
    {
        return view('home.products');
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
