<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_menu', function (Blueprint $table) {
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_pesan');
            $table->integer('jumlah_pesan');
            $table->decimal('harga_item',10,2);
            $table->timestamps();


            $table->foreign('id_menu')->references('id_menu')->on('menu');
            $table->foreign('id_pesan')->references('id_pesan')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_menu');
    }
};
