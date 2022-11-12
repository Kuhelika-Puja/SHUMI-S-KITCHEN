<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('company_name');
            $table->string('company_sologan');
            $table->string('company_description');
            $table->string('company_author');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('email_one');
            $table->string('email_two');
            $table->string('address');
            $table->string('fb');
            $table->string('twitter');
            $table->string('ins');
            $table->string('linkedin');
            $table->string('skype');
            $table->string('youtube');
            $table->string('location_embaded');
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
        Schema::dropIfExists('settings');
    }
}
