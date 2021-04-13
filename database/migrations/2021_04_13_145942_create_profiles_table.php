<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('profiles', function (Blueprint $table) {
//            $table->id();
//            $table->timestamp('birth_date')->nullable()->default(null);
//            $table->string('cover')->nullable()->default(null);
//            $table->string('status')->nullable()->default(null);
//            $table->string('color')->nullable()->default(null);
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
//        Schema::dropIfExists('profiles');
    }
}
