<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeepingrecords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('timekeeping_id')->index();
            $table->string('employee_id');
            $table->string('clock_in');
            $table->string('clock_out');
            $table->string('total');
            
            $table->timestamps();

            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeepingrecords');
    }
}
