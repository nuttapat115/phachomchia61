<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->studentID;
        $sit = DB::select(DB::raw("SELECT distinct sit FROM yim where studentID = '$id' "));
        foreach ($sit as $sits){
            $userSIT = $sits->sit;
        }
        return view('home')->with('sit',$userSIT);
    }

    public function history()
    {
        $id = Auth::user()->studentID;
        return view('history');
    }

    public function stage()
    {
        $id = Auth::user()->studentID;
        return view('stage');
    }
}
