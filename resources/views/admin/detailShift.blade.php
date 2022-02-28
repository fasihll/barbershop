@extends('admin.template')
@section('title', ' detail Shift | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/shift.css') }}">
@endsection
@section('content')
    <h2>Detail Shift</h2>
    <div class="col-md-5">
        <ul class="list-group">
            <li class="list-group-item">{{ $shift->nama_shift }}</li>
            <li class="list-group-item">{{ $shift->jam_mulai }}</li>
            <li class="list-group-item">{{ $shift->jam_akhir }}</li>
        </ul>
        <a href="{{ route('shift') }}" class="btn btn-danger mt-2">Kembali</a>
    </div>

@endsection
