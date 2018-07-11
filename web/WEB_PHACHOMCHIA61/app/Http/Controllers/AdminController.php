<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // dataTables
    public function getDataProfile(){

    }
    public function dashboard(){
        $id = Auth::user()->studentID;
        $allDetailProfile = DB::select(DB::raw("SELECT p.studentID , p.name , p.department , COUNT(h.studentID) AS COUNTT FROM profile p , history h WHERE p.studentID = '$id' AND p.studentID = h.studentID"));
        return view('adminauth.dashboard.index')->with('DetailProfile',$allDetailProfile);
    }

}
