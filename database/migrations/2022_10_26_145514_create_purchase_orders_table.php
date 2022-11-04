<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id('id');
            $table->string('nomor_po');
            $table->string('tanggal_po');
            $table->integer('rab_id');
            $table->integer('project_id');
            $table->string('kategori');
            $table->string('nama_barang_jasa');
            $table->string('nilai_barang_jasa');
            $table->string('no_item_rab');
            $table->string('np_sub_item_rab');
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
        Schema::drop('purchase_orders');
    }
}
