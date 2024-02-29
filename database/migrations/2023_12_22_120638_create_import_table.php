<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import', function (Blueprint $table) {
            $table->id();
            $table->string('Datatype');
            $table->string('country');
            $table->string('country_code');
            $table->longText('mf_content_heading');
            $table->longText('mf_content_metatag');
            $table->string('mf_content_metatitle', 250);
            $table->longText('mf_content_metadescription');
            $table->longText('mf_content_metakeywords');
            $table->longText('mf_content_editordata');
            $table->longText('mf_content_images')->nullable();
            // Key Points
            $table->string('kpimages')->nullable();
            $table->longText('kp_head')->nullable();
            $table->longText('kpeditordata')->nullable();
            $table->string('kpimages_two')->nullable();
            $table->longText('kp_head_two')->nullable();
            $table->longText('kpeditordata_two')->nullable();
            $table->string('kpimages_three')->nullable();
            $table->longText('kp_head_three')->nullable();
            $table->longText('kpeditordata_three')->nullable();
            $table->string('kpimages_four')->nullable();
            $table->longText('kp_head_four')->nullable();
            $table->longText('kpeditordataa_four')->nullable();
            $table->string('kpimages_five')->nullable();
            $table->longText('kp_head_five')->nullable();
            $table->longText('kpeditordata_five')->nullable();
            // Use case
            $table->longText('uc_heading');
            $table->longText('uc_para')->nullable();
            $table->longText('uc_product')->nullable();
            // Country Product
            $table->longText('cp_heading');
            $table->longText('country_partner_para')->nullable();
            $table->longText('country_partner_name')->nullable();
            // Sample data 
            $table->longText('sd_heading');
            $table->longText('sd_para')->nullable();
            $table->string('slider_images_one')->nullable();
            $table->string('data_file')->nullable();

            // Benifit
            $table->longText('benifit_heading')->nullable();
            $table->longText('benifit_para')->nullable();
            $table->longText('benifit_name')->nullable();
            // FAQ
            $table->longText('Faq_heading_one')->nullable();
            $table->longText('Faq_heading_two')->nullable();
            $table->longText('Faq_heading_three')->nullable();
            $table->longText('Faq_heading_four')->nullable();
            $table->longText('Faq_heading_five')->nullable();
            $table->longText('Faq_para_one')->nullable();
            $table->longText('Faq_para_two')->nullable();
            $table->longText('Faq_para_three')->nullable();
            $table->longText('Faq_para_four')->nullable();
            $table->longText('Faq_para_five')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import');
    }
};
