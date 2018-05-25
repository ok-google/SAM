<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Administrator;

class AdministratorController extends Controller
{
    public function index()
    {
    	$result = Administrator::get()->where('Aktif', 'Y');

    		return view('administrator.index', compact('result'));
    }

    public function add()
    {
    	return view('administrator.add');
    }

    public function store()
    {
    	Administrator::create([
    		'nama' => request('nama'),
    		'no_ktp' => request('no_ktp'), 
    		'jabatan' => request('jabatan'), 
    		'alamat' => request('alamat'),
    		'RT' => request('rt'), 
    		'RW' => request('rw'), 
    		'no_telp' => request('no_telp'), 
    		'Aktif' => 'Y', 
    		'created_by' => 'admin',
			'updated_by' => 'admin', 
			'deleted_by' => 'admin', 
			'created_at' => Carbon::now()->toDateTimeString(),
			'Keterangan_deleted' => ''
    	]);

    	return redirect()->route('administrator.index');
    }

    public function edit($id)
    {
    	$result = Administrator::get()->where('id', $id);

    	return view('administrator.update', compact('result'));
    }

    public function update($id)
    {
    	Administrator::where('id', $id)->update([
    		'nama' => request('nama'),
    		'no_ktp' => request('no_ktp'), 
    		'jabatan' => request('jabatan'), 
    		'RT' => request('rt'), 
    		'RW' => request('rw'), 
    		'alamat' => request('alamat'),
    		'no_telp' => request('no_telp'), 
    		'Aktif' => 'Y', 
    		'updated_by' => 'admin',
    	]);

    	return redirect()->route('administrator.index');
    }

    public function delete($id)
    {
    	Administrator::where('id', $id)->update([
    		'Aktif' => 'T',
    		'deleted_by' => 'admin',
    		'deleted_by' => Carbon::now()->toDateTimeString()
    	]);

    	return redirect()->route('administrator.index');
    }

}
