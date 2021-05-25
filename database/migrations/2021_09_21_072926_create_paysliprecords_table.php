<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysliprecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paysliprecords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id')->index();
            $table->unsignedBigInteger('payslip_id');
            $table->longtext('data')->nullable()->default('text');
         
            $table->timestamps();

            $table->foreign('employees_id')->references('id')->on('employees');
            $table->foreign('payslip_id')->references('id')->on('payslip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paysliprecords');
    }
}
