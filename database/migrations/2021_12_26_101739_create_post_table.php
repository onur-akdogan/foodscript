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
            $table->string('title');
            $table->string('subtitle');
            $table->string('image');
            $table->string('post_video');
            $table->string('hazirlanma_suresi');
            $table->string('kisi_sayisi');
            $table->string('pisirme_süresi');
            $table->string('malzemeler');
            $table->string('yapilis');
            $table->string('kalori');
            $table->integer('status')->default(0);
            $table->integer('category_id');
            $table->integer('zorluk');
            $table->integer('user_id');
            $table->string('description');
            $table->string('keywords');
            $table->string('tags');
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
