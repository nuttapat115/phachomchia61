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
    public function dashboard(){
        $id = Auth::user()->studentID;
//        SELECT p.name , p.studentID , p.department , COUNT(h.studentID) AS COUNTT FROM profile p , history h WHERE p.studentID = h.studentID AND p.studentID LIKE '%610%'GROUP by p.studentID
        $allDetailProfile = DB::select(DB::raw("SELECT p.name , p.studentID , p.department , COUNT(h.studentID) AS COUNTT FROM profile p , history h WHERE p.studentID = h.studentID GROUP by p.studentID"));
        return view('adminauth.dashboard.index')->with('DetailProfile',$allDetailProfile);
    }

}
