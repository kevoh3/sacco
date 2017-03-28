<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('empno')->unique();
            $table->integer('nid')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('dob');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('residence');
            $table->timestamps();
        });
                      Schema::table('employees', function ($table){
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['user_id']);
        Schema::dropIfExists('employees');
    }
}
