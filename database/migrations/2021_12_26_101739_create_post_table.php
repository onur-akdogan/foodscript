<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
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
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->string('post_video')->nullable();
            $table->string('hazirlanma_suresi')->nullable();
            $table->string('kisi_sayisi')->nullable();
            $table->string('pisirme_süresi')->nullable();
            $table->string('malzemeler')->nullable();
            $table->string('yapilis')->nullable();
            $table->string('kalori')->nullable();
            $table->integer('status')->default(0);
            $table->integer('category_id');
            $table->integer('zorluk')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('tags')->nullable();
            $table->integer('gunun_yemegi')->default(0);
            $table->integer('slider')->default(0);
            $table->integer('onerilenler')->default(0);
            $table->integer('onecikart')->default(0);
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
        Schema::dropIfExists('post');
    }
}
