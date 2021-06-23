<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Image;
use Auth;

class CategoryController extends Controller
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
     *  List/Add Categories
     */
    public function index()
    {

        return view('categories.index', [

            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     *  Category Store
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:categories', 
            // 'image'  => 'required|mime:jpeg,jpg,png,',
            'image'  => 'required|image',
        ]);

        $id = Category::insertGetId([
            'name'       => $request->name,
            'image'      => $request->image,
            'added_by'   => Auth::id(), 
            'created_at' => Carbon::now(),
        ]);

        $image       = $request->file('image');
        $filename    = $id. '.' .$image->getClientOriginalExtension('image');
        $location    = public_path('uploads/categories/' . $filename); 
        Image::make($image)->save($location);

        Category::find($id)->update([
            'image' => $filename,
        ]) ;

        return back()->withSuccess('Category added successfully');

        // $location = base_path('public');
    }

    /**
     * Category Edit Page 
     */
    public function edit($id)
    {
        $category = Category::find($id); 
        return view('categories.edit', compact('category'));
    }

    /**
     *  Category update 
     */
    public function update(Request $request)
    {
       $category = Category::findOrFail($request->id);

       if($request->hasFile('image'))
       {
           $existing_image = public_path('uploads/categories/' . $category->image);
           unlink($existing_image);

           $image     = $request->file('image');
           $filename  = $category->id. '.' .$image->extension('image');
           $location  = public_path('uploads/categories/' . $filename); 
           
        //    Image::make($image)->resize(10, 10)->save();
           Image::make($image)->save($location); 

           $category->image = $filename; 
       }

           $category->name = $request->name; 
           $category->save(); 

           return back()->withSuccess('Category updated');

    }

// END    
}
