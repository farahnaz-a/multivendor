<?php

namespace App\Http\Controllers;

use Str;
use Image;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Auth;


class ProductController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', [
            'categories' => Category::orderBy('name', 'asc')->get(),
        ]);
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

            'name'              => 'required', 
            'price'             => 'required',
            'description'       => 'required', 
            'image'             => 'required|image', 
            'subCategory_id'    => 'required',

       ]);

       $create_slug = Str::slug($request->name); 

    //    $time = Carbon::now()->timestamp; 
       $random =  Str::random(5);

       $slug =  $create_slug . '-' .$random; 

       $data = Product::create([
        
          'name'            => $request->name, 
          'price'           => $request->price, 
          'description'     => $request->description, 
          'image'           => 'foo.jpg', 
          'subCategory_id'  => $request->subCategory_id,
          'slug'            => $slug, 

       ]);

       $image       = $request->file('image');
       $filename    = $data->id. '.' .$image->getClientOriginalExtension('image');
       $location    = public_path('uploads/products/' . $filename); 
       Image::make($image)->save($location);

       $data->image = $filename; 
       $data->save(); 


       if($request->multiple_image)
       {
           $counter = 1;
            foreach($request->file('multiple_image') as $image)
            {
               $multi_image = $image; 
               $filename    = $data->id. '-'. $counter  . '.' .$image->extension();
               $location    = public_path('uploads/multiple_images/' . $filename);

               Image::make($multi_image)->save($location);

               ProductImage::create([
                'product_id' => $data->id, 
                'image'      => $filename, 
                'created_at' => Carbon::now(),
               ]);



               $counter++;
            }
       }

    return back()->withSuccess('Product Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    /**
     *  Edit Multiple Image 
     */
    public function updateMultiple($id)
    {
        $product = Product::find($id);

        return view('products.editMultiple', compact('product'));
    }
    /**
     *  Replace Multiple Image 
     */
    public function replaceMultiple(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $data = ProductImage::find($request->id);

        $existing = public_path('uploads/multiple_images/' . $data->image); 
        unlink($existing);

        $multi_image = $request->image; 
        $filename    = $data->image;
        $location    = public_path('uploads/multiple_images/' . $filename);

        Image::make($multi_image)->save($location);

        return back()->withSuccess('Image updated');

    }

    /**
     *  Ajax Call 
     */
    public function getsubcategory(Request $request)
    {
       $subcategories = SubCategory::where('category_id', $request->category)->get(); 

       $view = view('frontend.includes.subcategory', compact('subcategories')); 
       $response = $view->render();
       return response()->json(['success' => $response]); 

    }
}
