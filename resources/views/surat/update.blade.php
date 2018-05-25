@extends('layouts.app')

@section('content')

  <div class="container">
    @foreach ($result as $value)
    <form method="POST" action="{{ route('surat.update', $value->id) }}">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="form-group">
        <label>Nama Surat</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="{{ $value->nama }}">
      </div>

      <div class="form-group">
        <label>File Surat</label>
        <input type="text" class="form-control" name="file_surat" placeholder="Masukan File Surat" value="{{ $value->file_surat }}">
      </div>

      <div class="form-group">
        <label>Syarat Pengajuan Surat</label>
        <input type="text" class="form-control" name="syarat" placeholder="Masukan Syarat" value="{{ $value->syarat }}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
  </div>
@endsection