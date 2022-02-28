@extends('admin.template')
@section('title', ' detail Karyawan | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/detailKaryawan.css') }}">
@endsection
@section('content')
    <h2>Detail Karyawan</h2>
    <div class="row">
        <div class="col-md-3" align="center">
            <img src="{{ url('images/' . $karyawan->foto . '') }}" alt="" width="200" class="img-fluid">
        </div>
        <div class="col-md-7" align="left">
            <ul class="list-group">
                <li class="list-group-item">{{ $karyawan->nama_karyawan }}</li>
                <li class="list-group-item">{{ $karyawan->alamat }}</li>
                <li class="list-group-item">{{ $karyawan->telepon }}</li>
                <li class="list-group-item">{{ $karyawan->nama_shift }}</li>
            </ul>
        </div>
    </div>
    <a href="{{ route('karyawan') }}" class="btn btn-danger mt-2">Kembali</a>
@endsection
