<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
        Schema::create('produk', function (Blueprint $table) {
            $table->string('part_code', 25)->primary;
            $table->string('part_name', 50);
            $table->string('tipe_code', 5);
            $table->string('kategori', 25);
            $table->string('berat', 25);
            $table->string('warna', 25);
            $table->string('rak_code', 5);
            $table->string('part_img', 25);
            $table->integer('harga');
            $table->integer('stok');
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
        Schema::dropIfExists('produk');
    }
}
