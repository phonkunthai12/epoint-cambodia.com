<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 256);
            $table->string('price_category', 25);
            $table->text('overiew');
            $table->decimal('price', 5, 2);
            $table->integer('discount');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
            ->references('id')->on('course_categories')
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
        Schema::drop('courses');
    }
}
