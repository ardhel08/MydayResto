<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('id_order');
            $table->String('costumer');
            $table->String('namamenu');
            $table->String('hargamenu');
            $table->integer('no_meja');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->foreignId('id_user');
            $table->String('keterangan');
            $table->String('status_order');
            $table->integer('totalbayar');
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
        Schema::dropIfExists('order');
    }
}
