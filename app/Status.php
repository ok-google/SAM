<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['id', 'id_pengajuan', 'accept_rt', 'accept_rw', 'accept_rw', 'reject_rt_keterangan', 
							'reject_rw_keterangan', 'reject_lurah_keterangan', 'tgl_ambil', 'file_surat'];
}