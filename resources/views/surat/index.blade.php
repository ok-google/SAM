@extends('layouts.app')

@section('content')

  <div class="container">
    <a href="{{ route('surat.add') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">File Surat</th>
          <th scope="col">Syarat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($result as $value)
          <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->file_surat }}</td>
            <td>{{ $value->syarat }}</td>
            <td> 
              <a href="{{ route('surat.edit', $value->id) }}" class="btn btn-primary">Edit</a> 
              <a href="{{ route('surat.delete', $value->id) }}" class="btn btn-warning">Hapus</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection