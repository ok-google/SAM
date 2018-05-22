<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = ['id', 'nama', 'no_ktp', 'jabatan', 'RT', 'RW', 'no_telp', 'Aktif', 'created_by',
							'updated_by', 'deleted_by', 'deleted_at', 'Keterangan_deleted'];
}