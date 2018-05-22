<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Masyarakat;

class MasyarakatController extends Controller
{
    public function index()
    {
    	$result = Masyarakat::get()->where('Aktif', 'Y');

    	return view('masyarakat.index', compact('result'));
    }

    public function add()
    {
    	return view('masyarakat.add');
    }

    public function store()
    {
    	Masyarakat::create([
    		'nama' => request('nama'), 
    		'no_ktp' => request('no_ktp'), 
    		'no_kk' => request('no_kk'), 
    		'alamat' => request('alamat'), 
    		'RT' => request('rt'), 
    		'RW' => request('rw'), 
    		'no_telp' => request('no_telp'), 
    		'file_kk' => request('file_kk'), 
    		'Aktif' => 'Y', 
    		'created_by' => 'admin',
    		'updated_by' => 'admin', 
    		'deleted_by' => 'admin',
    		'created_at' => Carbon::now()->toDateTimeString(),
    		'updated_at' => Carbon::now()->toDateTimeString(),
    		'deleted_at' => Carbon::now()->toDateTimeString(), 
    		'Keterangan_deleted' => ''
    	]);

    	return redirect()->route('masyarakat.index');
    }

    public function edit($id)
    {
    	$result = Masyarakat::get()->where('id', $id);

    	return view('masyarakat.update', compact('result'));
    }

    public function update($id)
    {
    	Masyarakat::where('id', $id)->update([
    		'nama' => request('nama'), 
    		'no_ktp' => request('no_ktp'), 
    		'no_kk' => request('no_kk'), 
    		'alamat' => request('alamat'), 
    		'RT' => request('rt'), 
    		'RW' => request('rw'), 
    		'no_telp' => request('no_telp'), 
    		'file_kk' => request('file_kk'), 
    		'Aktif' => 'Y', 
    		'updated_by' => 'admin', 
    		'updated_at' => Carbon::now()->toDateTimeString()
    	]);

		return redirect()->route('masyarakat.index');    	
    }

    public function delete($id)
    {
    	Masyarakat::where('id', $id)->update([
    		'Aktif' => 'T',
    		'deleted_by' => 'admin',
    		'deleted_at' => Carbon::now()->toDateTimeString()
    	]);    

    	return redirect()->route('masyarakat.index');
    }
}
