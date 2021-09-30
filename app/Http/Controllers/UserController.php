<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   /**
    *  Constructor 
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('users.dashboard');
    }
}
