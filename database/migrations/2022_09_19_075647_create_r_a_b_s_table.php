<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRABSTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_a_b_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rab_no');
            $table->string('rab_tgl_ttd');
            $table->string('rab_tgl_awal');
            $table->string('rab_tgl_akhir');
            $table->text('catatan');
            $table->integer('project_rec_id');
            $table->string('project_name');
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
        Schema::drop('r_a_b_s');
    }
}
