<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
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
    *  Create course
    */
   public function create()
   {
       return view('medic.courses.create');
   }

   /**
    *  Store Course 
    */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required', 
            'category'     => 'required', 
            'instructor'     => 'required', 
            'number_of_lecture'     => 'required', 
            'duration'     => 'required', 
            'language'     => 'required', 
            'price'        => 'required', 
            'description'     => 'required', 
            'thumbnail'     => 'required|image', 
            'video'     => 'required|file', 
        ]);
         
        $course = Course::create([
            'name'       => $request->name,
            'category'       => $request->category,
            'instructor'       => $request->instructor,
            'number_of_lecture'       => $request->number_of_lecture,
            'duration'       => $request->duration,
            'language'       => $request->language,
            'price'       => $request->price,
            'description'       => $request->description,
            'thumbnail'       => $request->thumbnail,
            'video'       => $request->video,
            'medic_id'    => Auth::id(),
        ]);

        $thumb = $request->file('thumbnail'); 
        $filename = $course->id. '-thumb.' . $thumb->extension('thumbnail');
        $location = public_path('uploads/course/thumbnail/'); 
        $thumb->move($location, $filename); 

        $video = $request->file('video'); 
        $filename1 = $course->id. '-video.' . $video->extension('video');
        $location = public_path('uploads/course/videos/');
        $video->move($location,$filename1); 

        $course->thumbnail = $filename;
        $course->video = $filename1;
        $course->save(); 

        return back()->withSuccess('Course added.Please wait for admins approval');

    }

 // END   
}
