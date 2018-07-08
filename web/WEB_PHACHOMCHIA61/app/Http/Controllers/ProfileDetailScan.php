<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileDetailScan extends Controller
{
    //
    public function name(Request $request)
    {
        $studentID = $request->input('studentID');
        $nameProfile = DB::select(DB::raw("SELECT distinct name FROM profile where studentID = '$studentID'"));

        if ($nameProfile) {
            foreach ($nameProfile as $nameProfiles){
                $nameProfilesUse = $nameProfiles->name;
            }
            return response()->json($nameProfilesUse, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error data name', 400);
        }

    }

    public function department(Request $request)
    {
        $studentID = $request->input('studentID');
        $departmentProfile = DB::select(DB::raw("SELECT distinct department FROM profile where studentID = '$studentID'"));

        if ($departmentProfile) {
            foreach ($departmentProfile as $departmentProfiles){
                $departmentProfilesUse = $departmentProfiles->department;
            }
            return response()->json($departmentProfilesUse, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error data name', 400);
        }

    }

    public function insertDATA(Request $request){
        $studentID = $request->input('studentID');
//        $today = $request->input('date');
        $today = date('Y-m-d H:i:s');
        DB::table('history')->insert(
            [
                'date' => $today,
                'studentID' => $studentID,
                'status' => 'Y',
            ]
        );
    }
}
