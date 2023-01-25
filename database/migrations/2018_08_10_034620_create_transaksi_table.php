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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('NomorTelepon');
            $table->boolean('Status')->nullable();
            $table->string('token')->nullable();
            $table->bigInteger('id_ruangan')->unsigned();
            $table->foreign('id_ruangan')->references('id')->on('ruangan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('alamat');
            $table->date('tanggal_penggunaan');
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
        Schema::dropIfExists('transaksi');
    }
};
