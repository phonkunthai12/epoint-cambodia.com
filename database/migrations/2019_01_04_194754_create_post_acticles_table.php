<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostActiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_acticles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_acticle_id');
            $table->foreign('category_acticle_id')
                    ->references('id')->on('category_posts')
                    ->onDelete('cascade');
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_acticles');
    }
}
