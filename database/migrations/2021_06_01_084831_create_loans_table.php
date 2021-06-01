<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id')->index();
            $table->string('full_name')->index();
            $table->enum('loan_type',[
                'Tax' , 'SSS' , 'Philhealth' , 'Pag Ibig'
            ])->index();
            $table->string('loan_amount')->index();
            $table->string('mounts_payable')->index();
            $table->string('notes')->index();
            ;
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
        Schema::dropIfExists('loans');
    }
}
