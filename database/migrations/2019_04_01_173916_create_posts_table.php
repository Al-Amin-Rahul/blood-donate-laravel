<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('patientName');
            $table->tinyInteger('patientAge');
            $table->string('bloodGroup');
            $table->string('date');
            $table->string('address');
            $table->tinyInteger('bloodUnit');
            $table->integer('mobile');
            $table->string('city');
            $table->string('hospitalName');
            $table->string('time');
            $table->string('details');
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
