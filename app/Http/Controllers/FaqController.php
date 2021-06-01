<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('faqs.index');
    }
}
