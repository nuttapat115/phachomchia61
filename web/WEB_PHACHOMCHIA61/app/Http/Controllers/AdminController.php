<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function __construct(){
        $this->middleware('admin');
    }

    public function dashboard(){
        return view('adminauth.dashboard.home');
    }
    public function scan()
    {
        return view('scan');
    }
}
