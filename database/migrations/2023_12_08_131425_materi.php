<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_materi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_materi');
            $table->text('slug');
            $table->text('link');
            $table->integer('playlist_id');
            $table->text('deskripsi');
            $table->text('gambar_materi');
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
        schema::dropIfExists('tbl_materi');
    }
}
