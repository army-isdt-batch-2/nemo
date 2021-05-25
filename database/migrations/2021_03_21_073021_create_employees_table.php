<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('employee_id')->index();
            $table->binary('photo')->index();
            $table->string('first_name')->index();
            $table->string('last_name')->index();
            $table->string('middle_name')->index();
            $table->string('contact')->index();
            $table->date('birthday')->index();
            $table->enum('gender',[
                'Male' , 'Female'
            ]);
            $table->unsignedBigInteger('department_id')->index();
            $table->string('designation')->index();
            $table->integer('basic_range')->index();
            $table->unsignedBigInteger('sss')->index();
            $table->unsignedBigInteger('philhealth')->index();
            $table->unsignedBigInteger('pagibig')->index();
            $table->unsignedBigInteger('tax')->index();
          

            $table->timestamps();
        
            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('sss')->references('id')->on('deduction');
            $table->foreign('philhealth')->references('id')->on('deduction');
            $table->foreign('pagibig')->references('id')->on('deduction');
            $table->foreign('tax')->references('id')->on('deduction');
            
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employees');
    }
}
