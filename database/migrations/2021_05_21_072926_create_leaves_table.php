<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id')->index();
            $table->string('designation')->index();
            $table->enum('leave_type',[
                'RNR' , 'Break' , 'Maternity' , 'Paternity'
            ]);
            $table->date('start_date')->index();
            $table->date('end_date')->index();
            $table->string('notes')->index();
            
            $table->timestamps();
            
            $table->foreign('employees_id')->references('id')->on('employees');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
