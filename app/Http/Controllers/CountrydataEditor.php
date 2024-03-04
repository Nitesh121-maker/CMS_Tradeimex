<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countrydata;
use App\Models\Countryexportdata;
use DB;
class CountrydataEditor extends Controller
{
    //
    function CountryDataEdit(Request $request) {

           $validatedata = $request->validate([
            'Datatype'                   => 'required',
            'country_values'             => 'required',
            'mf_content_heading'         => 'required',
            'mf_content_metatag'         => 'required',
            'mf_content_metatitle'       => 'required',
            'mf_content_metadescription' => 'required',
            'mf_content_metakeywords'    => 'required',
            'mf_content_editordata'      => 'required',
            'mf_content_images'          => 'nullable',
  
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
            //   $countrydata = new Countrydata();
              $country= $validatedata['country_values'];
 
              $countrydata = Countrydata::where('country', $country)->first();
              if ($countrydata) {
                # code...

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
                    $imageName =  $path->getClientOriginalName();
        
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
                    // $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $sliderimageName =  $path->getClientOriginalName();
        
                    // Move the uploaded image to the desired storage location
                    $path->move(public_path('frontend/img/others'), $sliderimageName);
        
                    // Set the image filename attribute on the Product model
                    $countrydata->slider_images_one = $sliderimageName;
                }
                // $countrydata->data_file                  = $validatedata['data_file'];
                if ($request->hasFile('data_file')) {
                    $path = $request->file('data_file');
                    // $extension = $path->getClientOriginalExtension();
        
                    // Generate a unique name for the image to avoid filename conflicts
                    $fileName = $path->getClientOriginalName();
        
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
              }else {
                # code...
                return redirect()->back()->with(['message' => 'Record not found.']);
              }
          }
          else {
            //   $countrydata = new Countryexportdata();
              $country= $validatedata['country_values'];
              $countrydata = Countryexportdata::where('country', $country)->first();
              if ($countrydata) {
                # code...

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
                    $imageName =  $path->getClientOriginalName();
        
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
                    $path->move(public_path('/img/import'), $imageName);
                
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
              }else {
                # code...
                return redirect()->back()->with(['message' => 'Record not found.']);
              }

          }

 
          return redirect()->back()->with('success', 'Data Edited successfully!');
       
      }
}
