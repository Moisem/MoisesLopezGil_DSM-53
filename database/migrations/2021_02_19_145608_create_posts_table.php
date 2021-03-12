<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('descripcion');
            $table->string('image');
            $table->string('extract');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('categories_id')->references('id')->on('categories');  
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
        Schema::dropIfExists('posts');
    }
}
