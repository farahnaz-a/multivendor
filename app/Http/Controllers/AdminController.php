<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }

    /**
     *  Application Statistic
     */
    public function index()
    {

        $users = User::where('id', '!=', Auth::id())->paginate(10);
        $total = User::count();

        return view('admin.index', compact('users' , 'total'));

    }
}
