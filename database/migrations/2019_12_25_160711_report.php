<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Report extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function ($table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('Description');
            $table->Integer('book_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('report',function($table){
            $table->foreign('book_id')->references('id')->on('book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
