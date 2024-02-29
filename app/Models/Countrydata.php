<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrydata extends Model
{
    use HasFactory;
    protected $table = 'import';
    protected $fillable = [
        'Datatype'                  ,
        'country'            ,
        'country_code'       ,
        'mf_content_heading'        ,
        'mf_content_metatag'        ,
        'mf_content_metatitle'      ,
        'mf_content_metadescription',
        'mf_content_metakeywords'   ,
        'mf_content_editordata'     ,
        'mf_content_images'          ,

        'kpimages'                   ,
        'kp_head'                   ,
        'kpeditordata'               ,
        'kpimages_two'                   ,
        'kp_head_two'                   ,
        'kpeditordata_two'               ,
        'kpimages_three'                   ,
        'kp_head_three'                   ,
        'kpeditordata_three'               ,
        'kpimages_four'                   ,
        'kp_head_four'                   ,
        'kpeditordataa_four'               ,
        'kpimages_five'                   ,
        'kp_head_five'                   ,
        'kpeditordata_five'               ,

        'uc_heading'                 ,
        'uc_para'                    ,
        'uc_product'                 ,
        'cp_heading'                ,
        'country_partner_name'       ,
        'cp_name'                    ,
        'country_partner_para'       ,

        'slider_images_one'          ,
        'data_file'          ,
        'sd_heading'        ,
        'sd_para'         ,

        'benifit_heading'           ,
        'benifit_para'               ,
        'benifit_name'               ,
        'Faq_heading_one'            ,
        'Faq_heading_two'               ,
        'Faq_heading_three'             ,
        'Faq_heading_four'              ,
        'Faq_heading_five'              ,
        'Faq_para_one'               ,
        'Faq_para_two'               ,
        'Faq_para_three'             ,
        'Faq_para_four'              ,
        'Faq_para_five'              ,
    ];
}
