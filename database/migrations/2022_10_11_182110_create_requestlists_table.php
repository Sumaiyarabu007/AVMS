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
            $table->date("date");
            $table->string("vehicle_type");
            $table->string("v_id")->unique();
            $table->string("driver's_name");
            $table->string("2nd_seater's_name");
            $table->string("authority");
            $table->string("destination");
            $table->string("km_reading");
            $table->time("start_time");
            $table->time("probable_end_time");
            $table->string("present_fuel");
            $table->date("last_maintenance_date");
            $table->date("comment");
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
