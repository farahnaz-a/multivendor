<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategories.index', [
            'categories'     => Category::orderBy('name', 'asc')->get(),
            'subcategories'  => SubCategory::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'category_id'  => 'required',
        ]); 


        SubCategory::create($request->except('_token') + ['created_at' => Carbon::now()]);

        return back()->withSuccess('Sub category added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {

        $categories = Category::orderBy('name', 'asc')->get();
        return view('subcategories.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name'        => 'required', 
            'category_id' => 'required',
        ]);


        $subCategory->name         = $request->name; 
        $subCategory->category_id  = $request->category_id; 

        $subCategory->save(); 

        // return redirect('/admin/subCategories'); 
        return redirect()->route('subCategories.index')->withSuccess('Category updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete(); 

        return back()->withSuccess('subcategory deleted');

    }
}
