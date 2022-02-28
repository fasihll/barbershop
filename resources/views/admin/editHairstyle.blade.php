@extends('admin.template')
@section('title', ' edi hairstyle | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/hairstylr.css') }}">
@endsection
@section('content')
    <h2>edit Hairstyle</h2>
    <div class="box bg-white p-3">
        <div class="col-md-5">
            <form action="/hairstyle/update/{{ $hairstyle->id_hairstyle }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="hairstyle">Nama</label>
                    <input type="text" name="nama_hairstyle" id="hairstyle" class="form-control"
                        value="{{ $hairstyle->nama_hairstyle }}">
                </div>
                <div class="form-group">
                    <label for="harga"> Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $hairstyle->harga }}">
                </div>
                <div class=" form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control"
                        value="{{ $hairstyle->description }}">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <img src="{{ url('images/' . $hairstyle->foto . '') }}" alt="" width="50">
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                <a href="{{ route('hairstyle') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection
