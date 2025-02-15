<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) { 
            $table->id();
            $table->string('judul');
            $table->foreignId('kategori_id')->constrained('kategori_bukus'); 
            $table->string('kode_buku');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('tahun_penerbit');
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
        Schema::dropIfExists('bukus');
    }
};
