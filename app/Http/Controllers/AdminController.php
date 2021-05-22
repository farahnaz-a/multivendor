<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Application Statistic
     */
    public function index()
    {
        $users = User::paginate(10);
        $total = User::count();
        return view('admin.index', compact('users', 'total'));
    }
}
