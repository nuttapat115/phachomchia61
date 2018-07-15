<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function dashboard(Request $request){
//        dd($request->session()->all());
        // SELECT p.name , p.studentID , p.department , COUNT(h.studentID) AS COUNTT FROM profile p , history h WHERE p.studentID = h.studentID AND p.studentID LIKE '%610%'GROUP by p.studentID
        $allDetailProfile = DB::select(DB::raw("SELECT p.name , p.studentID , p.department , COUNT(h.studentID) AS COUNTT FROM profile p , history h WHERE p.studentID = h.studentID GROUP by p.studentID"));
        return view('adminauth.dashboard.scan')->with('DetailProfile',$allDetailProfile);
    }

    public function AddUser(){
        return view('adminauth.dashboard.addUser');
    }

    public function addUserData(Request $request){
        $studentID = $request->input('studentID');
        $names = $request->input('name');
        $department = $request->input('department');
        $password = Hash::make('1234567890');
        DB::table('profile')->insert(
            [
                'studentID' => $studentID,
                'name' => $names,
                'password' => $password,
                'department' => $department,
            ]
        );
        toast('เพิ่มข้อมูลเรียบร้อย โปรดเชคที่นั่งของนักศึกษาอีกที','success','top-right');
        return redirect()->route('AddUser');
    }
}
