<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('index');
    }
    public function countryform(){
        $data = array(
            ""            =>  "Select Country",
            "Bangladesh"  =>  "Bangladesh | TAS-1",
            "China"       =>  "China | TAS-2",
            "Egypt"       =>  "Egypt | TAS-3",
            "Indonesia"   =>  "Indonesia | TAS-4",
            "Iran"        =>  "Iran | TAS-5",
            "Iraq"        =>  "Iraq | TAS-6",
            "Japan"       =>  "Japan | TAS-7",
            "Kazakhstan"  =>  "Kazakhstan | TAS-8",
            "Kuwait"      =>  "Kuwait | TAS-9 ",
            "Malaysia"    =>  "Malaysia | TAS-10",
            "Pakistan"    =>  "Pakistan | TAS-11",
            "Philippines" =>  "Philippines | TAS-12",
            "Qatar"         =>  "Qatar | TAS-13",
            "Saudi-Arabia"=>  "Saudi Arabia | TAS-14",
            "Singapore"   =>  "Singapore | TAS-15",
            "South-Korea" =>  "South Korea | TAS-16",
            "Sri-Lanka"   =>  "Sri Lanka | TAS-17",
            "Taiwan"      =>  "Taiwan | TAS-18",
            "Thailand"    =>  "Thailand | TAS-19",
            "Turkey"      =>  "Turkey | TAS-20",
            "UAE"         =>  "UAE | TAS-21 ",
            "Ukraine"     =>  "Ukraine | TAS-22",
            "Uzbekistan"  =>  "Uzbekistan| TAS-23",
            "Vietnam"     =>  "Vietnam | TAS-24",
            "Botswana"    =>  "Botswana| TAF-1",
            "Cameroon"    =>  "Cameroon| TAF-2",
          "Central-Africa"=>  "Central Africa| TAF-3",
            "Chad"        =>  "Chad| TAF-4",
            "DR-Congo"    =>  "DR Congo| TAF-5",
            "Ethiopia"    =>  "Ethiopia| TAF-6",
            "Ghana"       =>  "Ghana| TAF-7",
            "Ivory-Coast" =>  "Ivory Coast| TAF-8",
            "Kenya"       =>  "Kenya| TAF-9",
            "Lesotho"     =>  "Lesotho| TAF-10",
            "Liberia"     =>  "Liberia| TAF-11",
            "Malawi"      =>  "Malawi| TAF-12",
            "Namibia"     =>  "Namibia| TAF-13",
            "Niger"       =>  "Niger| TAF-14",
            "Nigeria"     =>  "Nigeria| TAF-15",
            "Sao-Tome"    =>  "Sao Tome| TAF-16",
            "Senegal"     =>  "Senegal| TAF-17",
            "Sierra-Leone"=>  "Sierra Leone| TAF-18",
            "South-Africa"=>  "South Africa| TAF-19",
            "Tanzania"    =>  "Tanzania| TAF-20",
            "Togo"        =>  "Togo| TAF-21",
            "Uganda"      =>  "Uganda| TAF-22",
            "Zambia"      =>  "Zambia| TAF-23",
            "Zimbabwe"    =>  " Zimbabwe| TAF-24",
            "Austria"     =>  "Austria|TEU-1",
            "Belgium"     =>  "Belgium | TEU-2",     
            "Bulgaria"    =>  "Bulgaria |TEU-3",
            "Croatia"     =>  "Croatia |TEU-4"  ,         
            "Cyprus"      =>  "Cyprus | TEU-5" ,        
            "Czech"       =>  "Czech | TEU-6" ,           
            "Denmark"     =>  "Denmark | TEU-7" ,           
            "Estonia"     =>  "Estonia |TEU-8"  ,          
            "Finland"     =>  "Finland |TEU-9"  ,          
            "France"      =>  "France |TEU-10",
            "Germany"     =>  "Germany | TEU-11",
            "Greece"      =>  "Greece | TEU-12",
            "Hungary"     =>  "Hungary | TEU-13",
            "Ireland"     =>  "Ireland | TEU-14",
            "Italy"       =>  "Italy | TEU-15",
            "Kazakhstan"  =>  "Kazakhstan | TEU-16",
            "Kosovo"      =>  "Kosovo | TEU-17",
            "Latvia"      =>  "Latvia | TEU-18",
            "Lithuania"   =>  "Lithuania | TEU-19",
            "LuxemBourg"  =>  "LuxemBourg |TEU-20",
            "Malta"       =>  "Malta | TEU-21",
            "Moldova"     =>  "Moldova | TEU-22",
            "Netherlands" =>  "Netherlands | TEU-23",
            "Poland's"     =>  "Polands | TEU-24",
            "Portugal"    =>  "Portugal | TEU-25",
            "Panama"      =>  "Panama | TEU-30",
            "Russia"      =>  "Russia | TEU-26",
            "Romania"     =>  "Romania | TEU-27",
            "Slovakia"    =>  "Slovokia | TEU-28",
            "Slovenia"    =>  "Slovenia | TEU-29",
            "Spain"       =>  "Spain | TEU-30",
            "Sweden"      =>  "Sweden | TEU-31",
            "UK"          =>  "UK | TEU-32",
            "Ukraine"     =>  "Ukraine | TEU-33",
            "Ukraine"     =>  "Ukraine | TEU-34",
            "Canada"       =>  "Canada| TNA-1",
            "Costa-Rica" =>  "Costa Rica| TNA-2",
            "EL-Salvador" =>  "EL Salvador| TNA-3",
            "Guatemala"   =>  "Guatemala| TNA-4",

        );
        return view('country_form',compact('data'));
    }
    public function continentform(){
        $data = array(
            ""              =>   "Select continent",
            "Asia"          =>   "Asia | AS-24",
            "Africa"        =>   "Africa | AF-24", 
            "Europe"        =>   "Europe | EU-34",
            "North-America" =>   "North America | NA-8" ,
            "Oceania"       =>   "Oceania | OC-3" ,
            "South-America" =>   "South America | SA-11",
           
        );
        return view('continent_form',compact('data'));
    }
}
