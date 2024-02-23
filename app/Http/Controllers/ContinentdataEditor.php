<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Continent;
use DB;
class ContinentdataEditor extends Controller
{
    //
    function ContinentDataedited(Request $request){
        $validatedata = $request->validate([
            
            'mf_content_heading'         => 'required',
            'mf_content_metatitle'       => 'required',
            'mf_content_metadescription' => 'required',
            'mf_content_metakeywords'    => 'required',
            'mf_content_editordata'      => 'required',
            'mf_content_images'          => 'nullable',
  
            'continent_imports_heading'  => 'nullable',
            'continent_imports_para'     => 'nullable',
            'continent_imports_product'  => 'nullable',
 
            'cp_heading'                 => 'nullable',
            'cp_para'                    => 'nullable',
            'cp_name'                    => 'nullable',
  
            'sd_heading'                 => 'nullable',
            'sd_para'                    => 'nullable',
            'slider_images_one'          => 'nullable',
            'slider_images_two'          => 'nullable',
            'slider_images_three'        => 'nullable',
            'slider_images_four'         => 'nullable',
            'slider_images_five'         => 'nullable',
            'data_file'                  => 'nullable',
        ]);
        // dd();
        $continent= $request->continent_values;
 
        $continentdata = continent::where('continent', $continent)->first();
        if ($continentdata) {
            $continentdata->mf_content_heading         = $validatedata['mf_content_heading'];

            $continentdata->mf_content_metatitle       = $validatedata['mf_content_metatitle'] ;
            $continentdata->mf_content_metadescription = $validatedata['mf_content_metadescription'];
            $continentdata->mf_content_metakeywords    = $validatedata['mf_content_metakeywords'];
            $continentdata->mf_content_editordata      = $validatedata['mf_content_editordata'];
             // $countrydata->mf_content_images          = $validatedata['mf_content_images'];
             if ($request->hasFile('mf_content_images')) {
                 $path = $request->file('mf_content_images');
                 $extension = $path->getClientOriginalExtension();
     
                 // Generate a unique name for the image to avoid filename conflicts
                 $imageName = uniqid() . '.' . $extension;
     
                 // Move the uploaded image to the desired storage location
                 $path->move(public_path('frontend/img/continent'), $imageName);
     
                 // Set the image filename attribute on the Product model
                 $continentdata->mf_content_images = $imageName;
             }
             $continentdata->ci_heading                 = $validatedata['continent_imports_heading'];
             $continentdata->ci_para                    = $validatedata['continent_imports_para'];
             $continentdata->ci_heading                 = $validatedata['continent_imports_heading'];
             $continentdata->ci_para                    = $validatedata['continent_imports_para'];
             $continentdata->ci_product                 = $validatedata['continent_imports_product'];
             $continentdata->cp_heading                 = $validatedata['cp_heading'];
             $continentdata->continent_partner_para       = $validatedata['cp_para'];
             $continentdata->continent_partner_name       = $validatedata['cp_name'];
             
             $continentdata->sd_heading                 = $validatedata['sd_heading'];
             $continentdata->sd_para                    = $validatedata['sd_para'];
             // $continentdata->slider_images_one          = $validatedata['slider_images_one'];
             if ($request->hasFile('slider_images_one')) {
                $path = $request->file('slider_images_one');
                // $extension = $path->getClientOriginalExtension();
                $name      = $path->getClientOriginalName();
    
                // Generate a unique name for the image to avoid filename conflicts
                $imageName = $name ;
    
                // Move the uploaded image to the desired storage location
                $path->move(public_path('frontend/img/continent'), $imageName);
    
                // Set the image filename attribute on the Product model
                $continentdata->slider_images_one = $imageName;
            }
            if ($request->hasFile('slider_images_two')) {
                $path = $request->file('slider_images_two');
                // $extension = $path->getClientOriginalExtension();
                $name      = $path->getClientOriginalName();
    
                // Generate a unique name for the image to avoid filename conflicts
                $imageName = $name ;
    
                // Move the uploaded image to the desired storage location
                $path->move(public_path('frontend/img/continent'), $imageName);
    
                // Set the image filename attribute on the Product model
                $continentdata->slider_images_two = $imageName;
            }
            if ($request->hasFile('slider_images_three')) {
                $path = $request->file('slider_images_three');
                // $extension = $path->getClientOriginalExtension();
                $name      = $path->getClientOriginalName();
    
                // Generate a unique name for the image to avoid filename conflicts
                $imageName = $name ;
    
                // Move the uploaded image to the desired storage location
                $path->move(public_path('frontend/img/continent'), $imageName);
    
                // Set the image filename attribute on the Product model
                $continentdata->slider_images_three = $imageName;
            }
            if ($request->hasFile('slider_images_four')) {
                $path = $request->file('slider_images_four');
                // $extension = $path->getClientOriginalExtension();
                $name      = $path->getClientOriginalName();
    
                // Generate a unique name for the image to avoid filename conflicts
                $imageName = $name ;
    
                // Move the uploaded image to the desired storage location
                $path->move(public_path('frontend/img/continent'), $imageName);
    
                // Set the image filename attribute on the Product model
                $continentdata->slider_images_four = $imageName;
            }
            if ($request->hasFile('slider_images_five')) {
                $path = $request->file('slider_images_five');
                // $extension = $path->getClientOriginalExtension();
                $name      = $path->getClientOriginalName();
    
                // Generate a unique name for the image to avoid filename conflicts
                $imageName = $name ;
    
                // Move the uploaded image to the desired storage location
                $path->move(public_path('frontend/img/continent'), $imageName);
    
                // Set the image filename attribute on the Product model
                $continentdata->slider_images_five = $imageName;
            }
             // $continentdata->data_file                  = $validatedata['data_file'];
             if ($request->hasFile('data_file')) {
                 $path = $request->file('data_file');
                //  $extension = $path->getClientOriginalExtension();
     
                 // Generate a unique name for the image to avoid filename conflicts
                 $fileName = uniqid() . '.' . $extension;
     
                 // Move the uploaded file to the desired storage location
                 $path->move(public_path('/img'), $fileName);
     
                 // Set the file filename attribute on the Product model
                 $continentdata->data_file = $fileName;
             }
         
             $continentdata->save();
        }
      
         return redirect()->back()->with('successmessage', 'Data Edited successfully!');
    }

    public function editcontinentData(Request $request) {
        $continent = $request->input('continent');

        $editdata  = DB::table('continent')
        -> select('*')
        -> where('continent' , $continent)   
        -> get();
 
        return view('continentedit', ['continentdata' => $editdata]);
    }
}
