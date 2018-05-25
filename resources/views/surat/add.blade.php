@extends('layouts.app')

@section('content')

  <div class="container">
    <form method="POST" action="{{ route('surat.store') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Nama Surat</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
      </div>

      <div class="form-group">
        <label>File Surat</label>
        <input type="text" class="form-control" name="file_surat" placeholder="Masukan Nama">
      </div>

      <div class="form-group">
        <label>Syarat Pengajuan Surat</label>
        <input type="text" class="form-control" name="syarat" placeholder="Masukan Nama">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection