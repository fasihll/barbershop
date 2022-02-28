@extends('admin.template')
@section('title', ' add karyawan | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('content')
    <h2>Tambah Karyawan</h2>
    <div class="box p-3 bg-white">
        <div class="col-md-5">
            <form action="{{ route('tambahKaryawan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_karyawan" id=""
                        class="form-control @error('nama_karyawan') is-invalid @enderror"
                        value="{{ old('nama_karyawan') }}">
                    @error('nama_karyawan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="" class="form-control @error('alamat') is-invalid @enderror"
                        value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomor">Nomor</label>
                    <input type="number" name="nomor" id="" class="form-control @error('nomor') is-invalid @enderror"
                        value="{{ old('nomor') }}">
                    @error('nomor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shift">Shift</label>
                    <select name="id_shift" id="shift" class="form-control @error('id_shift') is-invalid @enderror">
                        <option selected hidden>Pilih Shift</option>
                        @foreach ($shift as $s)
                            <option value="{{ $s->id_shift }}">{{ $s->nama_shift }}</option>
                        @endforeach
                    </select>
                    @error('id_shift')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror">
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                <a href="{{ route('karyawan') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection
