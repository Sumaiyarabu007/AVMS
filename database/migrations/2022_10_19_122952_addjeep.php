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
        Schema::create('addjeeps', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("authority");
            $table->string("destination");
            $table->string("km_reading");
            $table->string("when_out");
            $table->string("when_in");
            $table->string("present_fuel");
            $table->string("last_refuelling_date");
            $table->string("last_maintenance_date");
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
        Schema::dropIfExists('addjeeps');
    }
};
