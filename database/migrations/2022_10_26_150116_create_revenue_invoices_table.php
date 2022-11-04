<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenueInvoicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenue_invoices', function (Blueprint $table) {
            $table->id('id');
            $table->string('nomor_invoice');
            $table->string('tanggal_invoice');
            $table->string('nilai_invoice');
            $table->integer('project_id');
            $table->text('keterangan');
            $table->string('termin');
            $table->string('periode');
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
        Schema::drop('revenue_invoices');
    }
}
