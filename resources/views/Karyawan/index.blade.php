@extends('layouts.app')

@section('title','Data Karyawan')

@section('content')
<a href="/karyawan/create" class="btn btn-primary mb-3">Tambah Karyawan</a>


<table class="table table-bordered">
    <tr class="table-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Aksi</th>
    </tr>
    @foreach($karyawan as $k)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $k->nama }}</td>
        <td>{{ $k->jabatan }}</td>
        <td>
            <a href="/karyawan/{{ $k->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            <form action="/karyawan/{{ $k->id }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection