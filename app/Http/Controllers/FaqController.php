<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class FaqController extends Controller
{
    /**
     * Construct
     */
    public function __construct()
    {
        $this-> middleware('auth');
    }


    /**
     * Faq List 
     */
    public function index(){

        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    /**
     * Faq Store
     */
    public function store(Request $request){

        $request->validate([
            'question' => 'required|unique:faqs',
            'answer' => 'required',
        ]);

        Faq::insert([
            'question'    => $request->question,
            'answer'      => $request->answer,
            'created_at'  => Carbon::now(),
        ]);

        return back()->with('success','Submited Successfully');
        
    }

}
