<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pengajuan');
            $table->char('accept_rt', 1);
            $table->char('accept_rw', 1);
            $table->char('accept_lurah', 1);
            $table->string('reject_rt_keterangan');
            $table->string('reject_rw_keterangan');
            $table->string('reject_lurah_keterangan');
            $table->date('tgl_ambil');
            $table->string('file_surat');
            $table->timestamps();
            
            $table->foreign('id_pengajuan')->references('id')->on('pengajuan_surats')->onDelete('CASCADE');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
