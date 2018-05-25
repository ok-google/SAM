<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use Carbon\Carbon;
//use Dompdf\Dompdf;
//use Dompdf\Options;

class SuratController extends Controller
{
    public function index()
    {
    	$result = Surat::get()->where('Aktif', 'Y');

    	return view('surat.index', compact('result'));
    }

    public function add()
    {
    	return view('surat.add');
    }

    public function store()
    {
    	Surat::create([
    		'nama' => request('nama'), 
    		'file_surat' => request('file_surat'), 
    		'syarat' => request('syarat'),
    		'Aktif' => 'Y', 
    		'created_by' => 'admin',
    		'updated_by' => '', 
    		'deleted_by' => '',
    		'Keterangan_deleted' => ''
    	]);
    	
    	return redirect()->route('surat.index');
    }

    public function edit($id)
    {
    	$result = Surat::get()->where('id', $id);

    	return view('surat.update', compact('result'));
    }

    public function update($id)
    {
    	Surat::where('id', $id)->update([
    		'nama' => request('nama'), 
    		'file_surat' => request('file_surat'), 
    		'syarat' => request('syarat'),
    		'Aktif' => 'Y', 
    		'updated_by' => 'admin', 
    		'updated_at' => Carbon::now()->toDateTimeString()
    	]);

    	return redirect()->route('surat.index');
    }

    public function delete($id)
    {
    	Surat::where('id', $id)->update([
    		'Aktif' => 'T',
    		'deleted_by' => 'admin',
    		'deleted_at' => Carbon::now()->toDateTimeString()
    	]);    

    	return redirect()->route('masyarakat.index');
    }


}
