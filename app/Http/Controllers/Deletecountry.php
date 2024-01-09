<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countryexportdata;
use App\Models\Countrydata;
use DB;
class Deletecountry extends Controller
{
    //
    function deletecountry(Request $request){
        $datatype = $request->datatype;
        if ($datatype =='import') {
            # code...
            $country = $request->country;
            $countryrow = Countrydata::where('country', $country)->first();
            if ($countryrow) {
                # code...
                $countryrow->delete();
                return redirect()->back()->with('deletemessage', "Data of '$country' is deleted successfully!");
            }
        } else {
            # code...
            $country = $request->country;
            $countryrow = Countryexportdata::where('country', $country)->first();
            if ($countryrow) {
                # code...
                $countryrow->delete();
                return redirect()->back()->with('deletemessage', "Data of '$countryName' is deleted successfully!");
            }
        }
        
    }
}
