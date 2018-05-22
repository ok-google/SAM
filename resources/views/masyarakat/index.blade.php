@extends('layouts.app')

@section('content')

  <div class="container">
    <a href="{{ route('masyarakat.add') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">No KTP</th>
          <th scope="col">NO KK</th>
          <th scope="col">Alamat</th>
          <th scope="col">RT</th>
          <th scope="col">RW</th>
          <th scope="col">Telepon</th>
          <th scope="col">File KK</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($result as $value)
          <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->no_ktp }}</td>
            <td>{{ $value->no_kk }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->RT }}</td>
            <td>{{ $value->RW }}</td>
            <td>{{ $value->no_telp }}</td>
            <td>{{ $value->file_kk }}</td>
            <td> 
              <a href="{{ route('masyarakat.edit', $value->id) }}" class="btn btn-primary">Edit</a> 
              <a href="{{ route('masyarakat.delete', $value->id) }}" class="btn btn-warning">Hapus</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection