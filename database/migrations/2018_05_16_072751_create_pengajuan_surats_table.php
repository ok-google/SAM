<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_masyarakat');
            $table->unsignedInteger('id_surat');
            $table->string('keperluan');
            $table->char('Aktif', 1);
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable($value = true);
            $table->string('Keterangan_deleted');

            $table->foreign('id_masyarakat')->references('id')->on('masyarakats')->onDelete('CASCADE');
            $table->foreign('id_surat')->references('id')->on('surats')->onDelete('CASCADE');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_surats');
    }
}
