<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $fillable = ['id', 'nama', 'no_ktp', 'no_kk', 'alamat', 'RT', 'RW', 'no_telp', 'file_kk', 'Aktif', 'created_by',
							'updated_by', 'deleted_by', 'deleted_at', 'Keterangan_deleted'];
}