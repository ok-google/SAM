<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = ['id', 'nama', 'file_surat', 'syarat', 'Aktif', 'created_by',
							'updated_by', 'deleted_by', 'deleted_at', 'Keterangan_deleted'];
}
