<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('course_id')
            ->references('id')->on('post_acticles')
            ->onDelete('cascade');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')
                    ->references('id')->on('users')
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
        Schema::dropIfExists('my_courses');
    }
}
