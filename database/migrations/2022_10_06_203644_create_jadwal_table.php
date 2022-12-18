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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('id_ruangan')->unsigned();
            $table->foreign('id_ruangan')->references('id')->on('ruangan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('user')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('id_guest')->unsigned()->nullable();
            $table->foreign('id_guest')->references('id')->on('transaksi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->dateTime('Waktupenggunaan');
            $table->dateTime('Waktuhingga');
            $table->string('Acara');
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
        Schema::dropIfExists('jadwal');
    }
};
