<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Auth;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {$id=Auth::id();
        $avatar=User::findOrFail($id);
        return view('home',['id'=>Auth::id(),'img'=>$avatar->avatar]);
    }
}