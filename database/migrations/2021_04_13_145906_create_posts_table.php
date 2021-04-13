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
//        Schema::create('posts', function (Blueprint $table) {
//            $table->id();
//            $table->string('title', 200);
//            $table->tinyInteger('status')->nullable()->default(0);
//            $table->string('thumbnail')->nullable()->default(null);
//            $table->text('abstract')->nullable()->default(null);
//            $table->longtext('body')->nullable()->default(null);
//            $table->foreignId('user_id');
//            $table->timestamps();
//
//            $table->foreign('user_id')->references('id')->on('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('posts');
    }
}
