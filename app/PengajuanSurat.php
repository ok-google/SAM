<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $fillable = ['id', 'id_masyarakat', 'id_surat', 'keperluan', 'Aktif', 'created_by',
							'updated_by', 'deleted_by', 'deleted_at', 'Keterangan_deleted']
}