<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll_keys', function (Blueprint $table) {
            $table->integer('enroll_key_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->string('enroll_key_type',50); //daily ,monthly ,customize
            $table->string('password');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->unique(['enroll_key_id', 'course_id']);

            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('enroll_key_id')->references('id')->on('enrolls')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('enroll_keys');
    }
}
