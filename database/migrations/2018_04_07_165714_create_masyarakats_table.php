<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('no_ktp');
            $table->string('no_kk');
            $table->string('alamat');
            $table->char('RT', 3);
            $table->char('RW', 3);
            $table->string('no_telp');
            $table->string('file_kk');
            $table->char('Aktif', 1);
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable($value = true);
            $table->string('Keterangan_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masyarakats');
    }
}
