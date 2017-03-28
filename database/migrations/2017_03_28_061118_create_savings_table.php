<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->string('saving_date');
            $table->float('amount');
            $table->float('withdraw_amount');
            $table->string('withdraw_date');
            $table->float('charges');
            $table->float('total');
            $table->timestamps();
        });
            Schema::table('savings', function ($table){
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
        Schema::dropIfExists('savings');
    }
}
