<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deduction', function (Blueprint $table) {
            $table->id();
            $table->enum('contribution_type',[
                'Tax' , 'SSS' , 'Philhealth' , 'Pag Ibig'
            ]);
            $table->integer('basic_range')->index();
            $table->integer('employer_share')->index();
            $table->integer('employee_share')->index();
            $table->integer('monthly_contribution')->index();
          

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
        Schema::dropIfExists('deduction');
    }
}
