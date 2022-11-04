<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('id');
            $table->integer('project_id');
            $table->string('invoice_no');
            $table->string('invoice_date');
            $table->string('nama_pelanggan');
            $table->string('jatuh_tempo');
            $table->text('uraian_invoice');
            $table->string('nilai_invoice_rupiah');
            $table->string('nilai_invoice_usd');
            $table->integer('ppn_rupiah');
            $table->integer('ppn_usd');
            $table->integer('bulan');
            $table->string('data_valid');
            $table->string('pic');
            $table->string('tanggal_bayar');
            $table->string('status');
            $table->text('keterangan');
            $table->string('tipe');
            $table->string('bulan_bayar');
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
        Schema::drop('invoices');
    }
}
