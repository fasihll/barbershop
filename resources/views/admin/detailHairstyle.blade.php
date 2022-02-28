@extends('admin.template')
@section('title', ' Detail Hairstyle | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/hairstyle.css') }}">
@endsection
@section('content')
    <h2>Detail Hairstyle</h2>
    <div class="row">
        <div class="col-md-3" align="right">
            <img src="{{ url('images/' . $hairstyle->foto . '') }}" alt="" width="200">
        </div>
        <div class="col-md-5">
            <ul class="list-group-item">{{ $hairstyle->nama_hairstyle }}</ul>
            <ul class="list-group-item">Rp. {{ $hairstyle->harga }}</ul>
            <ul class="list-group-item">{{ $hairstyle->description }}</ul>
        </div>

    </div>
    <a href="{{ route('hairstyle') }}" class="btn btn-danger mt-2">Kembali</a>
@endsection
