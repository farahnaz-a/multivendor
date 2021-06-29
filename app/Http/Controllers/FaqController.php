<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqFormRequest;
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
        $this-> middleware('verified');
        $this-> middleware('checkAdmin');
    }


    /**
     * Faq List 
     */
    public function index(){

        $faqs = Faq::paginate(5);
        return view('faqs.index', compact('faqs'));
    }

    /**
     * Faq Store
     */
    public function store(FaqFormRequest $request)
    {
        Faq::insert([
            'question'    => $request->question,
            'answer'      => $request->answer,
            'created_at'  => Carbon::now(),
        ]);

        return back()->with('success','Submited Successfully');
        
    }

    /**
     * Faq Edit
     */
    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faqs.edit', compact('faq'));
    }

    /**
     * Faq Update
     */
    public function update(Request $request)
    {
       $faq = Faq::find($request->id); 
        
       $faq->update([
        'question'    => $request->question, 
        'answer'      => $request->answer,
        'updated_at'  => Carbon::now(),
       ]);

       return back()->withSuccess('Faq updated successfully');

    }

     /**
     * Faq view
     */
    public function view($id){

        $views = Faq::find($id);
        return view('faqs.view', compact('views') );
    }

    /**
     * Faq Delete 
     */
    public function delete($id)
    {
       Faq::find($id)->delete();
       return back()->withSuccess('Faq deleted');
    }


// END
}
