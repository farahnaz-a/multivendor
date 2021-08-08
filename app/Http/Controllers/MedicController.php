<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
}
