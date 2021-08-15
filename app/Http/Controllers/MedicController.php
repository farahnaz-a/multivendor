<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Product;
use Illuminate\Http\Request;

class MedicController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     *  Medic Dashboard 
     */
    public function index()
    {
        return view('medic.index');
    }

    /**
     *  My items
     */
    public function myItems()
    {
        $products = Product::where('medic_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('medic.items', compact('products'));
    }
}
