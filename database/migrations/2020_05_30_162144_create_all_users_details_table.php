<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_users_details', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            //$table->string('email')->unique(); 
            $table->string('email');           
            $table->string('password');
            $table->string('car_id');
            $table->string('car_name');
            $table->string('car_image');
            $table->string('company_id');
            $table->string('company_name');
            $table->string('company_logo');
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
        Schema::dropIfExists('all_users_details');
    }
}
