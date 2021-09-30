<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Course;
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
        if(Auth::user()->role == 'medic')
        {
            
            return view('medic.index');
       }
       else 
       {
           return back()->withSuccess('You do not have permission to access this page');
       }
    }

    /**
     *  My items
     */
    public function myItems()
    {
        $products = Product::where('medic_id', Auth::id())->orderBy('id', 'desc')->get();
        $videos   = Course::where('medic_id', Auth::id())->orderBy('id', 'desc')->get();
        if(Auth::user()->role == 'medic')
        {
            return view('medic.items', compact('products', 'videos'));
        }
        else 
        {
            return back()->withSuccess('You do not have permission to access this page');
        }
    }

    /**
     *  My items
     */
    public function mySettings()
    {
        if(Auth::user()->role == 'medic')
        {
        
            return view('medic.settings');
        }
        else 
        {
            return back()->withSuccess('You do not have permission to access this page');
        }
    }

    /**
     *  My items
     */
    public function myProfile()
    {
        if(Auth::user()->role == 'medic')
        {
            return view('medic.profile');
        
        }
        else 
        {
            return back()->withSuccess('You do not have permission to access this page');
        }
    }
}
