<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id');
            $table->string('client_id');
            $table->string('bidang_usaha');
            $table->string('npwp');
            $table->string('nama_perusahaan');
            $table->text('alamat_1');
            $table->text('alamat_2');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('no_kontak_billing');
            $table->string('email_billing');
            $table->string('website_billing');
            $table->string('pic_billing');
            $table->string('jabatan_billing');
            $table->string('no_telepon');
            $table->string('mobile');
            $table->string('email');
            $table->string('nama_pic');
            $table->string('jabatan');
            $table->string('status_pelanggan');
            $table->string('product_layanan');
            $table->string('hasil_produksi');
            $table->string('potensi_penjualan');
            $table->string('valid');
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
        Schema::drop('clients');
    }
}
