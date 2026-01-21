@extends('layouts.app')

@section('title','Absensi Karyawan')

@section('content')
<form action="/absensi" method="POST" class="mb-4">
@csrf
<div class="row">
    <div class="col-md-4">
        <select name="karyawan_id" class="form-select" required>
            <option value="">-- Pilih Karyawan --</option>
            @foreach($karyawan as $k)
            <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <select name="status" class="form-select" required>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Alpha">Alpha</option>
        </select>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary">Simpan Absensi</button>
    </div>
</div>
</form>


<table class="table table-striped">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tanggal</th>
    <th>Status</th>
</tr>
@foreach($absensi as $a)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $a->karyawan->nama }}</td>
    <td>{{ $a->tanggal }}</td>
    <td>
        <span class="badge bg-{{ $a->status == 'Hadir' ? 'success' : ($a->status == 'Izin' ? 'warning' : 'danger') }}">
            {{ $a->status }}
        </span>
    </td>
</tr>
@endforeach
</table>
@endsection