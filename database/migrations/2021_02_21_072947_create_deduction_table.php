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
            $table->integer('basic_range');
            $table->integer('employer_share');
            $table->integer('employee_share');
            $table->integer('monthly_contribution');
          

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
