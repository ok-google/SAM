@extends('layouts.app')

@section('content')

  <div class="container">
    @foreach ($result as $value)
    <form method="POST" action="{{ route('masyarakat.update', $value->id) }}">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="form-group">
        <label>Nama Kepala Keluarga</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="{{ $value->nama }}">
      </div>
      <div class="form-group">
        <label>No KTP</label>
        <input type="text" class="form-control" name="no_ktp" placeholder="Masukan Nomer KTP" value="{{ $value->no_ktp }}">
      </div>
      <div class="form-group">
        <label>No KK</label>
        <input type="text" class="form-control" name="no_kk" placeholder="Masukan Nomer KK" value="{{ $value->no_kk }}">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="{{ $value->alamat }}">
      </div>
      <div class="form-group">
        <label>RT</label>
        <select type="text" class="form-control" name="rt" value="{{ $value->RT }}">
          <option value="001"> 001 </option>
          <option value="002"> 002 </option>
          <option value="003"> 003 </option>
          <option value="004"> 004 </option>
        </select>
      </div>
      <div class="form-group">
        <label>RW</label>
        <select tabindex="" ype="text" class="form-control" name="rw" value="{{ $value->RW }}">
          <option value="001"> 001 </option>
          <option value="002"> 002 </option>
          <option value="003"> 003 </option>
          <option value="004"> 004 </option>
        </select>
      </div>
      <div class="form-group">
        <label>Nomer Telepon</label>
        <input type="text" class="form-control" name="no_telp" placeholder="Masukan Nomer Telepon" value="{{ $value->no_telp }}">
      </div>
      <div class="form-group">
        <label>File KK</label>
        <input type="text" class="form-control" name="file_kk" placeholder="Masukan File KK" value="{{ $value->file_kk }}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
  </div>
@endsection