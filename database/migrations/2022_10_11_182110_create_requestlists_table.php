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
        Schema::create('requestlist', function (Blueprint $table) {
            $table->id();
            $table->date("date")->nullable();
            $table->string("v_id")->nullable();
            $table->string("driver's_name")->nullable();
            $table->string("2nd_seater's_name")->nullable();
            $table->string("authority")->nullable();
            $table->string("destination")->nullable();
            $table->string("km_reading")->nullable();
            $table->time("start_time")->nullable();
            $table->time("probable_end_time")->nullable();
            $table->string("present_fuel")->nullable();
            $table->date("last_maintenance_date")->nullable();
            $table->date("comment")->nullable();
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
        Schema::dropIfExists('requestlist');
    }
};
