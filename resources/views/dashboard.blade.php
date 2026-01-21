@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5>Total Karyawan</h5>
                <h2>{{ $totalKaryawan }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5>Hadir Hari Ini</h5>
                <h2>{{ $hadirHariIni }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-danger mb-3">
            <div class="card-body">
                <h5>Tidak Hadir</h5>
                <h2>{{ $totalKaryawan - $hadirHariIni }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection