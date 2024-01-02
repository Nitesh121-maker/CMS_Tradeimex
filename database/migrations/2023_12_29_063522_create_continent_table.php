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
        Schema::create('continent', function (Blueprint $table) {
            $table->id();

            $table->string('continent');
            $table->string('continent_code');
            $table->longText('mf_content_heading');
            $table->string('mf_content_metatitle', 250);
            $table->longText('mf_content_metadescription');
            $table->longText('mf_content_metakeywords');
            $table->longText('mf_content_editordata');
            $table->longText('mf_content_images')->nullable();

            // Continent imports
            $table->longText('ci_heading');
            $table->longText('ci_para')->nullable();
            $table->longText('ci_product')->nullable();
            // Continent partners
            $table->longText('cp_heading');
            $table->longText('continent_partner_para')->nullable();
            $table->longText('continent_partner_name')->nullable();
            // Sample data 
            $table->longText('sd_heading');
            $table->longText('sd_para')->nullable();
            $table->string('slider_images_one')->nullable();
            $table->string('slider_images_two')->nullable();
            $table->string('slider_images_three')->nullable();
            $table->string('slider_images_four')->nullable();
            $table->string('slider_images_five')->nullable();
            $table->string('data_file')->nullable();
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
        Schema::dropIfExists('continent');
    }
};
