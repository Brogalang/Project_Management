<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id', 50);
            $table->string('departement', 50);
            $table->string('sales_am', 50);
            $table->string('client', 100);
            $table->string('project');
            $table->text('project_fullname');
            $table->string('jenis_project', 30);
            $table->string('kontrak_no');
            $table->string('kontrak_tgl_mulai');
            $table->string('kontrak_tgl_selesai');
            $table->string('bamk_tgl');
            $table->string('nilai_kontrak_BT');
            $table->string('nilai_kontrak_AT');
            $table->string('rab_no');
            $table->string('rab_tgl_approved');
            $table->string('status');
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
        Schema::drop('projects');
    }
}
