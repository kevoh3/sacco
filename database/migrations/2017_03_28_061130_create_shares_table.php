<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->float('amount');
            $table->string('date_added');
            $table->float('total');
            $table->timestamps();
        });
             Schema::table('shares', function ($table){
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
        Schema::dropIfExists('shares');
    }
}
