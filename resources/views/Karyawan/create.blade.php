@extends('layouts.app')

@section('title','Tambah Karyawan')

@section('content')
<form action="/karyawan" method="POST">
@csrf
<div class="mb-3">
    <label>Nama Karyawan</label>
    <input type="text" name="nama" class="form-control" required>
</div>
<div class="mb-3">
    <label>Jabatan</label>
    <input type="text" name="jabatan" class="form-control" required>
</div>
<button class="btn btn-success">Simpan</button>
<a href="/karyawan" class="btn btn-secondary">Kembali</a>
</form>
@endsection