<?php

namespace App\Http\Controllers;
use App\Models\Continent;
use DB;
use Illuminate\Http\Request;

class Deletecontinent extends Controller
{
    //
    function deletecontinent(Request $request){
        $continent = $request->continent;
        $continentrow = continent::where('continent', $continent)->first();
        if ($continentrow) {
            # code...
            $continentrow->delete();
            return redirect()->back()->with('deletemessage', "Data of '$continent' is deleted successfully!");
        }
    }
}
