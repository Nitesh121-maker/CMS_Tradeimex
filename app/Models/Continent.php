<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    protected $table = 'continent';
    protected $fillable = [
     'continent',
     'continent_code', 
     'mf_content_heading', 
     'mf_content_metatitle', 
     'mf_content_metadescription',
      'mf_content_metakeywords', 
      'mf_content_editordata', 
      'mf_content_images', 
      'uc_heading', 
      'uc_para', 
      'uc_product', 
      'cp_heading',
       'continent_partner_para', 
       'continent_partner_name', 
       'sd_heading',
        'sd_para', 
       'slider_images_one', 
       'slider_images_two', 
       'slider_images_three', 
       'slider_images_four', 
       'slider_images_five', 
        'data_file'];
}
