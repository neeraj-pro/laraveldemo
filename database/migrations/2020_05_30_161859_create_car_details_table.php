<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('car_model');           
            $table->string('car_color');
            $table->string('car_registraion_number');
            $table->string('company_name');
            $table->string('company_id');
            $table->string('company_logo');
            $table->string('car_image');
            $table->string('added_by');
            $table->boolean('is_Verified')->default(0);
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
        Schema::dropIfExists('car_details');
    }
}
