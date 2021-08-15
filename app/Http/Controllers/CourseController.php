<?php

namespace App\Http\Controllers;

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
}
