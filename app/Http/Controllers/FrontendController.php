<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
       return view('frontend.index');
    }

    public function products()
    {
        $products = Product::latest()->get();
        $courses = Course::latest()->get();
        return view('frontend.products', compact('products', 'courses'));
    }

    public function productDetails($id)
    {
        $product = Product::find($id); 
        return view('frontend.productdetails', compact('product'));
    }

    public function coursedetails($id)
    {
        $product = Course::find($id); 
        return view('frontend.productdetails', compact('product'));

    }

    public function about()
    {
        return view('frontend.about');
    }

// END    
}
