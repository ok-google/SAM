@extends('layouts.app')

@section('content')

  <div class="container">
    <form method="POST" action="{{ route('masyarakat.store') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Nama Kepala Keluarga</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
      </div>
      <div class="form-group">
        <label>No KTP</label>
        <input type="text" class="form-control" name="no_ktp" placeholder="Masukan Nomer KTP">
      </div>
      <div class="form-group">
        <label>No KK</label>
        <input type="text" class="form-control" name="no_kk" placeholder="Masukan Nomer KK">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
      </div>
      <div class="form-group">
        <label>RT</label>
        <select type="text" class="form-control" name="rt">
          <option value="001"> 001 </option>
          <option value="002"> 002 </option>
          <option value="003"> 003 </option>
          <option value="004"> 004 </option>
        </select>
      </div>
      <div class="form-group">
        <label>RW</label>
        <select tabindex="" ype="text" class="form-control" name="rw">
          <option value="001"> 001 </option>
          <option value="002"> 002 </option>
          <option value="003"> 003 </option>
          <option value="004"> 004 </option>
        </select>
      </div>
      <div class="form-group">
        <label>Nomer Telepon</label>
        <input type="text" class="form-control" name="no_telp" placeholder="Masukan Nomer Telepon">
      </div>
      <div class="form-group">
        <label>File KK</label>
        <input type="text" class="form-control" name="file_kk" placeholder="Masukan File KK">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection