<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRabDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rab_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rab_rec_id');
            $table->string('rab_no');
            $table->integer('rab_item_no');
            $table->string('nama_barang_jasa');
            $table->integer('hrg_satuan');
            $table->integer('quantity');
            $table->integer('frekuensi');
            $table->text('deskripsi');
            $table->text('catatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rab_details');
    }
}
