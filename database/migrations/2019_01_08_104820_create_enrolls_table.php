<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('enrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status',25);  //pending,approved,expire
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')
            ->references('id')->on('courses')
            ->onDelete('cascade');
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
        Schema::drop('enrolls');
    }
}
