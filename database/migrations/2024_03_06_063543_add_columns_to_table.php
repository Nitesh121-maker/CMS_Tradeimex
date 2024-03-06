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
        Schema::table('import', function (Blueprint $table) {
            //
            $table->string("stats_data_img")->nullable()->after("slider_images_one");
            $table->string("stats_data_file")->nullable()->after("stats_data_img");
            $table->string("bl_data_img")->nullable()->after("stats_data_file");
            $table->string("bl_data_file")->nullable()->after("bl_data_img");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table', function (Blueprint $table) {
            //
        });
    }
};
