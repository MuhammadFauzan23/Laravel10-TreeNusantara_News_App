<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Playlist extends Migration
{
    public function up()
    {
        Schema::create('tbl_playlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_playlist');
            $table->text('slug');
            $table->text('deskripsi');
            $table->integer('user_id');
            $table->text('gambar_playlist');
            $table->integer('is_active');
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
        schema::dropIfExists('tbl_playlist');
    }
}
