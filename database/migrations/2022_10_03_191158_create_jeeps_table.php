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
        Schema::create('jeeps', function (Blueprint $table) {
            $table->id();
            $table->date("date")->nullable();
            $table->string("authority")->nullable();
            $table->string("destination")->nullable();
            $table->string("km_reading")->nullable();
            $table->time("when_out")->nullable();
            $table->time("when_in")->nullable();
            $table->string("present_fuel")->nullable();
            $table->date("last_refuelling_date")->nullable();
            $table->date("last_maintenance_date")->nullable();
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
        Schema::dropIfExists('jeeps');
    }
};
