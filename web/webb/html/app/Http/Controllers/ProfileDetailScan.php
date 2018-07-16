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
            return response()->json('ชื่อ - นามสกุล', 400);
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
            return response()->json('คณะ', 400);
        }

    }

    public function checkName(Request $request){
        $studentID = $request->input('studentID');
        $allData = DB::select(DB::raw("SELECT studentID FROM profile WHERE studentID = '$studentID'"));
        if ($allData) {
            foreach ($allData as $allDatas){
                $OutAllDatas = $allDatas->studentID;
            }
            return response()->json($OutAllDatas, 200);
        }
        // Else, return error 400
        else {
            return response()->json('ชื่อ - นามสกุล', 400);
        }
    }

    public function insertDATA(Request $request){
        $studentID = $request->input('studentID');
        //check data before input
        $date = date('Y-m-d');
        $allDataHistory = DB::select(DB::raw("SELECT studentID FROM history WHERE studentID = '$studentID' AND date = '$date'"));
        if($allDataHistory){
            return response()->json('เข้าสู่ระบบซ้ำ', 200);
        }else{
            $allData = DB::select(DB::raw("SELECT studentID FROM profile WHERE studentID = '$studentID'"));
            if($allData){
                $date = date('Y-m-d');
                $time = date('H:i:s');
                DB::table('history')->insert(
                    [
                        'date' => $date,
                        'time' => $time,
                        'studentID' => $studentID,
                        'status' => 'เข้าประชุม'
                    ]
                );
            }
            return response()->json('เพิ่มข้อมูลเสร็จสิ้น', 400);
        }
    }
}
