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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employees_id');
            $table->binary('photo')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('contact');
            $table->string('address');
            $table->date('birthday');
            $table->enum('gender' ,[
                'male', 'female'
        ]);
            $table->string('designation');
            $table->string('rate');

            $table->unsignedBigInteger('employee_id')->index();
            $table->unsignedBigInteger('department_id')->index();
            $table->unsignedBigInteger('sss')->index();
            $table->unsignedBigInteger('philhealth')->index();
            $table->unsignedBigInteger('pagibig')->index();
            $table->unsignedBigInteger('tax')->index();
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('sss')->references('id')->on('deductions');
            $table->foreign('philhealth')->references('id')->on('deductions');
            $table->foreign('pagibig')->references('id')->on('deductions');
            $table->foreign('tax')->references('id')->on('deductions');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
