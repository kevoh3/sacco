<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->string('date_applied');
            $table->string('date_due');
            $table->float('amount');
            $table->decimal('interest',5,2);
            $table->float('total');
            $table->timestamps();
        });
             Schema::table('loans', function ($table){
           $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['member_id']);  
        Schema::dropIfExists('loans');
    }
}
