<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Countrydata;
use App\Models\Countryexportdata;
use App\Models\Continent;
use DB;

class Storedata extends Controller
{
    //
    public function storedata(Request $request){
        $validatedata = $request->validate([
          'Datatype'                   => 'required',
          'country_values'             => 'required',
          'mf_content_heading'         => 'required',
          'mf_content_metatag'         => 'required',
          'mf_content_metatitle'       => 'required',
          'mf_content_metadescription' => 'required',
          'mf_content_metakeywords'    => 'required',
          'mf_content_editordata'      => 'required',
          'mf_content_images'          => 'required',

          'kpimages'                   => 'nullable',
          'kp_head'                    => 'nullable',
          'kpeditordata'               => 'nullable',
          'kpimages_two'               => 'nullable',
          'kp_head_two'                => 'nullable',
          'kpeditordata_two'           => 'nullable',
          'kpimages_three'             => 'nullable',
          'kp_head_three'              => 'nullable',
          'kpeditordata_three'         => 'nullable',
          'kpimages_four'              => 'nullable',
          'kp_head_four'               => 'nullable',
          'kpeditordata_four'          => 'nullable',
          'kpimages_five'              => 'nullable',
          'kp_head_five'               => 'nullable',
          'kpeditordata_five'          => 'nullable',

          'uc_heading'                 => 'nullable',
          'uc_para'                    => 'nullable',
          'uc_product'                 => 'nullable',
          'cp_heading'                 => 'nullable',
          'cp_para'                    => 'nullable',
          'cp_name'                    => 'nullable',

          'sd_heading'                 => 'nullable',
          'sd_para'                    => 'nullable',
          'slider_images_one'          => 'nullable',
          'data_file'                  => 'nullable',


          'benifit_heading'            => 'nullable',
          'benifit_para'               => 'nullable',
          'benifit_name'               => 'nullable',
          'Faq_heading_one'            => 'nullable',
          'Faq_heading_two'            => 'nullable',
          'Faq_heading_three'          => 'nullable',
          'Faq_heading_four'           => 'nullable',
          'Faq_heading_five'           => 'nullable',
          'Faq_para_one'               => 'nullable',
          'Faq_para_two'               => 'nullable',
          'Faq_para_three'             => 'nullable',
          'Faq_para_four'              => 'nullable',
          'Faq_para_five'              => 'nullable',
        ]);

        if ($validatedata['Datatype'] == 'import') {
            $countrydata = new Countrydata();
            $parts = explode('|',$validatedata['country_values']);
            $country = trim($parts[0]);
            $country_code = trim($parts[1]);
            $countrydata->Datatype                   = $validatedata['Datatype'];
            $countrydata->country                    = $country;
            $countrydata->country_code               = $country_code;
            $countrydata->mf_content_heading         = $validatedata['mf_content_heading'];
            $countrydata->mf_content_metatag         = $validatedata['mf_content_metatag'];
            $countrydata->mf_content_metatitle       = $validatedata['mf_content_metatitle' ] ;
            $countrydata->mf_content_metadescription = $validatedata['mf_content_metadescription'];
            $countrydata->mf_content_metakeywords    = $validatedata['mf_content_metakeywords'];
            $countrydata->mf_content_editordata      = $validatedata['mf_content_editordata'];
                // $countrydata->mf_content_images          = $validatedata['mf_content_images'];
                if ($request->hasFile('mf_content_images')) {
                    $path = $request->file('mf_content_images');
                    $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName =  uniqid() . '.' . $extension;
        
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('/frontend/img/mfcontent'), $imageName);
        
                    // Set the image filename attribute on the Product model
                    $countrydata->mf_content_images = $imageName;
                }
           
                if ($request->hasFile('kpimages')) {
                    $path = $request->file('kpimages');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('/frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages = $imageName;
                }
       
                $countrydata->kp_head                    = $validatedata['kp_head'];
                $countrydata->kpeditordata               = $validatedata['kpeditordata'];
                // $countrydata->kpimages_two               = $validatedata['kpimages_two'];
                if ($request->hasFile('kpimages_two')) {
                    $path = $request->file('kpimages_two');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_two = $imageName;
                }
                $countrydata->kp_head_two                = $validatedata['kp_head_two'];              
                $countrydata->kpeditordata_two           = $validatedata['kpeditordata_two'];
                // $countrydata->kpimages_three             = $validatedata['kpimages_three'];

                $countrydata->kp_head_three              = $validatedata['kp_head_three'];
                if ($request->hasFile('kpimages_three')) {
                    $path = $request->file('kpimages_three');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $countrypartenrimg = $countrydata->kp_head_three . '.' . $extension;
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $countrypartenrimg);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_three = $countrypartenrimg;
                }
                dd($countrypartenrimg);
                $countrydata->kpeditordata_three         = $validatedata['kpeditordata_three'];
                // $countrydata->kpimages_four              = $validatedata['kpimages_four'];
                
                if ($request->hasFile('kpimages_four')) {
                    $path = $request->file('kpimages_four');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_four = $imageName;
                }
                $countrydata->kp_head_four               = $validatedata['kp_head_four'];
                $countrydata->kpeditordataa_four         = $validatedata['kpeditordata_four'];
                // $countrydata->kpimages_five              = $validatedata['kpimages_five'];

                if ($request->hasFile('kpimages_five')) {
                    $path = $request->file('kpimages_five');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_five = $imageName;
                }
                $countrydata->kp_head_five               = $validatedata['kp_head_five'];
                $countrydata->kpeditordata_five          = $validatedata['kpeditordata_five'];
    
                $countrydata->uc_heading                 = $validatedata['uc_heading'];
                $countrydata->uc_para                    = $validatedata['uc_para'];
                $countrydata->uc_product                 = $validatedata['uc_product'];
                $countrydata->cp_heading                 = $validatedata['cp_heading'];
                $countrydata->country_partner_para       = $validatedata['cp_para'];
                $countrydata->country_partner_name       = $validatedata['cp_name'];
                
                $countrydata->sd_heading                 = $validatedata['sd_heading'];
                $countrydata->sd_para                    = $validatedata['sd_para'];
                // $countrydata->slider_images_one          = $validatedata['slider_images_one'];
                if ($request->hasFile('slider_images_one')) {
                    $path = $request->file('slider_images_one');
                    $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
        
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/others'), $imageName);
        
                    // Set the image filename attribute on the Product model
                    $countrydata->slider_images_one = $imageName;
                }
                // $countrydata->data_file                  = $validatedata['data_file'];
                if ($request->hasFile('data_file')) {
                    $path = $request->file('data_file');
                    $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $fileName = uniqid() . '.' . $extension;
        
                    // Move the uploaded file to the desired storage location
                    $path->move(public_path('frontend/files'), $fileName);
        
                    // Set the file filename attribute on the Product model
                    $countrydata->data_file = $fileName;
                }
                $countrydata->benifit_heading            = $validatedata['benifit_heading'];
                $countrydata->benifit_para               = $validatedata['benifit_para'];
                $countrydata->benifit_name               = $validatedata['benifit_name'];
                $countrydata->Faq_heading_one            = $validatedata['Faq_heading_one'];
                $countrydata->Faq_heading_two            = $validatedata['Faq_heading_two'];
                $countrydata->Faq_heading_three          = $validatedata['Faq_heading_three'];
                $countrydata->Faq_heading_four           = $validatedata['Faq_heading_four'];
                $countrydata->Faq_heading_five           = $validatedata['Faq_heading_five'];
                $countrydata->Faq_para_one               = $validatedata['Faq_para_one'];
                $countrydata->Faq_para_two               = $validatedata['Faq_para_two'];
                $countrydata->Faq_para_three             = $validatedata['Faq_para_three'];
                $countrydata->Faq_para_four              = $validatedata['Faq_para_four'];
                $countrydata->Faq_para_five              = $validatedata['Faq_para_five'];

                $countrydata->save();

        }
        else {
            $countrydata = new Countryexportdata();
            $parts = explode('|',$validatedata['country_values']);
            $country = trim($parts[0]);
            $country_code = trim($parts[1]);
            $countrydata->Datatype                   = $validatedata['Datatype'];
            $countrydata->country                    = $country;
            $countrydata->country_code               = $country_code;
            $countrydata->mf_content_heading         = $validatedata['mf_content_heading'];
            $countrydata->mf_content_metatag         = $validatedata['mf_content_metatag'];
            $countrydata->mf_content_metatitle       = $validatedata['mf_content_metatitle'] ;
            $countrydata->mf_content_metadescription = $validatedata['mf_content_metadescription'];
            $countrydata->mf_content_metakeywords    = $validatedata['mf_content_metakeywords'];
            $countrydata->mf_content_editordata      = $validatedata['mf_content_editordata'];
                // $countrydata->mf_content_images          = $validatedata['mf_content_images'];
                if ($request->hasFile('mf_content_images')) {
                    $path = $request->file('mf_content_images');
                    $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName =  uniqid() . '.' . $extension;
        
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('/frontend/img/import'), $imageName);
        
                    // Set the image filename attribute on the Product model
                    $countrydata->mf_content_images = $imageName;
                }
                if ($request->hasFile('kpimages')) {
                    $path = $request->file('kpimages');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('/frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages = $imageName;
                }
                $countrydata->kp_head                    = $validatedata['kp_head'];
                $countrydata->kpeditordata               = $validatedata['kpeditordata'];
                // $countrydata->kpimages_two               = $validatedata['kpimages_two'];
                if ($request->hasFile('kpimages_two')) {
                    $path = $request->file('kpimages_two');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_two = $imageName;
                }
                $countrydata->kp_head_two                = $validatedata['kp_head_two'];
                
                $countrydata->kpeditordata_two           = $validatedata['kpeditordata_two'];
                // $countrydata->kpimages_three             = $validatedata['kpimages_three'];
                if ($request->hasFile('kpimages_three')) {
                    $path = $request->file('kpimages_three');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName =  $countrydata->kp_head_two . '.' . $extension;
                   
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_three = $imageName;
                }
                $countrydata->kp_head_three              = $validatedata['kp_head_three'];
                $countrydata->kpeditordata_three         = $validatedata['kpeditordata_three'];
                // $countrydata->kpimages_four              = $validatedata['kpimages_four'];
                
                if ($request->hasFile('kpimages_four')) {
                    $path = $request->file('kpimages_four');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_four = $imageName;
                }
                $countrydata->kp_head_four               = $validatedata['kp_head_four'];
                $countrydata->kpeditordataa_four         = $validatedata['kpeditordata_four'];
                // $countrydata->kpimages_five              = $validatedata['kpimages_five'];

                if ($request->hasFile('kpimages_five')) {
                    $path = $request->file('kpimages_five');
                    $extension = $path->getClientOriginalExtension();
                
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
                
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/import'), $imageName);
                
                    // Set the image filename attribute on the Product model
                    $countrydata->kpimages_five = $imageName;
                }
                $countrydata->kp_head_five               = $validatedata['kp_head_five'];
                $countrydata->kpeditordata_five          = $validatedata['kpeditordata_five'];
    
                $countrydata->uc_heading                 = $validatedata['uc_heading'];
                $countrydata->uc_para                    = $validatedata['uc_para'];
                $countrydata->uc_product                 = $validatedata['uc_product'];
                $countrydata->cp_heading                 = $validatedata['cp_heading'];
                $countrydata->country_partner_para       = $validatedata['cp_para'];
                $countrydata->country_partner_name       = $validatedata['cp_name'];
                
                $countrydata->sd_heading                 = $validatedata['sd_heading'];
                $countrydata->sd_para                    = $validatedata['sd_para'];
                // $countrydata->slider_images_one          = $validatedata['slider_images_one'];
                if ($request->hasFile('slider_images_one')) {
                    $path = $request->file('slider_images_one');
                    $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $imageName = uniqid() . '.' . $extension;
        
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/others'), $imageName);
        
                    // Set the image filename attribute on the Product model
                    $countrydata->slider_images_one = $imageName;
                }
                // $countrydata->data_file                  = $validatedata['data_file'];
                if ($request->hasFile('data_file')) {
                    $path = $request->file('data_file');
                    $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $fileName = uniqid() . '.' . $extension;
        
                    // Move the uploaded file to the desired storage location
                    $path->move(public_path('frontend/files'), $fileName);
        
                    // Set the file filename attribute on the Product model
                    $countrydata->data_file = $fileName;
                }
                $countrydata->benifit_heading            = $validatedata['benifit_heading'];
                $countrydata->benifit_para               = $validatedata['benifit_para'];
                $countrydata->benifit_name               = $validatedata['benifit_name'];
                $countrydata->Faq_heading_one            = $validatedata['Faq_heading_one'];
                $countrydata->Faq_heading_two            = $validatedata['Faq_heading_two'];
                $countrydata->Faq_heading_three          = $validatedata['Faq_heading_three'];
                $countrydata->Faq_heading_four           = $validatedata['Faq_heading_four'];
                $countrydata->Faq_heading_five           = $validatedata['Faq_heading_five'];
                $countrydata->Faq_para_one               = $validatedata['Faq_para_one'];
                $countrydata->Faq_para_two               = $validatedata['Faq_para_two'];
                $countrydata->Faq_para_three             = $validatedata['Faq_para_three'];
                $countrydata->Faq_para_four              = $validatedata['Faq_para_four'];
                $countrydata->Faq_para_five              = $validatedata['Faq_para_five'];

                $countrydata->save();
        }

        return redirect('/country')->with('success', 'Data Added successfully!');

    }

    // public function alldata(){
    //     return view('allData');
    // }

    public function countrydata(){
        try {
            $countryname = array(
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
                "Saudi-Arabia"=>  "Saudi-Arabia | TAS-14",
                "Singapore"   =>  "Singapore | TAS-15",
                "South-Korea" =>  "South-Korea | TAS-16",
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
            "Central-Africa"=>  "Central-Africa| TAF-3",
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
                "Sao-Tome"    =>  "Sao-Tome| TAF-16",
                "Senegal"     =>  "Senegal| TAF-17",
                "Sierra-Leone"=>  "Sierra-Leone| TAF-18",
                "South-Africa"=>  "South-Africa| TAF-19",
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
                "Russia"      =>  "Russia | TEU-26",
                "Romania"     =>  "Romania | TEU-27",
                "Slovakia"    =>  "Slovokia | TEU-28",
                "Slovenia"    =>  "Slovenia | TEU-29",
                "Spain"       =>  "Spain | TEU-30",
                "Sweden"      =>  "Sweden | TEU-31",
                "UK"          =>  "UK | TEU-32",
                "Ukraine"     =>  "Ukraine | TEU-33",
                "Canada"      =>  "Canada| TNA-1",
                "Costa-Rica"  =>  "Costa-Rica| TNA-2",
                "EL-Salvador" =>  "EL-Salvador| TNA-3",
                "Guatemala"   =>  "Guatemala| TNA-4",
                "Honduras"    =>  "Honduras| TNA-5",
                "Mexico"      =>  "Mexico| TNA-6",
                "US"          =>  "US| TNA-7",
                "Zambia"      =>  "Zambia| TNA-8",
                "Panama"      =>  "Panama | TNA-9",
                "Nicaragua"   =>  "Nicaragua | TNA-10",
                "Autralia"    =>  "Autralia| TOC-1",
                "Fiji_Fiji"   =>  "Fiji Fiji|TOC-2",
                "New_Zealand" =>  "New Zealand| TOC-3",  
                "Argentina"   =>  " Argentina|TSA-1",
                "Bolivia"     =>  "Bolivia|TSA-2",
                "Brazil"      =>  "Brazil|TSA-3",
                "Chile"       =>  "Chile|TSA-4",
                "Colombia"    =>  "Colombia|TSA-5",
                "Ecuador"     =>  "Ecuador|TSA-6",
                "Guyana"      =>  "Guyana|TSA-7",
                "Paraguay"    =>  "Paraguay|TSA-8",
                "Peru"        =>  "Peru|TSA-9",
                "Uruguay"     =>  "Uruguay|TSA-10",
                "Venezuela"   =>  "Venezuela|TSA-11",
            );

            $countrydata = DB::table('import')
            -> select('country','country_code','Datatype')
            -> union(DB::table('export')->select('country','country_code','Datatype'))
            -> get();

            return view('allData', ['countrydata' => $countrydata],['countryname' => $countryname]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in countrydata method: ' . $e->getMessage());
        }
    }
    // // Search Country by Code
    public function FunctionName(Request $request) {
        $valididatesearch = $request->validate([
           'country_code' =>'require',
           'datatype'     =>'nullable'
        ]);
        if($valididatesearch){
            $searchCountryByCode= Import::where("country_code", "=", $request->input("country_code"))->get()->toArray();
        }
    }
    public function editData(Request $request) {
        $country = $request->input('country');
        $country_code = $request->input('country_code');
        $Datatype = $request->input('datatype');

        $editdata  = DB::table('import')
        -> select('*')
        -> where('country'     , $country)
        -> where('country_code', $country_code)
        -> where('Datatype'    , $Datatype)
        -> union(
            DB::table('export')
        -> select('*')
        -> where('country'     , $country)
        -> where('country_code', $country_code)
        -> where('Datatype'    , $Datatype)   
        )
        ->get();
 
        return view('editcountrydata', ['countrydata' => $editdata]);
    }

    public function continentData(){
        $result = DB::select('SELECT continent, continent_code FROM continent');
        return view('continentdata',['continentdata' =>$result]);
    }
}
