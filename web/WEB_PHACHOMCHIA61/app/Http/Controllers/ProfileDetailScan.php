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
            return response()->json('error data', 400);
        }

    }
}
