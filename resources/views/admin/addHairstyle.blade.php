@extends('admin.template')
@section('title', ' add hairstyle | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('content')
    <h2>Add Hairstyle</h2>
    <div class="box bg-white p-3">
        <div class="col-md-5">
            <form action="{{ route('addHairstyle') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="hairstyle">Nama</label>
                    <input type="text" name="nama_hairstyle " id="hairstyle" class="form-control @error('nama_hairstyle')
                                                                is-invalid
                                        @enderror">
                    @error('nama_hairstyle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga"> Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control @error('harga')
                                                        is-invalid
                                    @enderror">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control @error('description')
                                                        is-invalid
                                    @enderror">
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control @error('nama_hairstyle')
                                                        is-invalid
                                    @enderror">
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                <a href="{{ route('hairstyle') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection
