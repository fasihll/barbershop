@extends('admin.template')
@section('title', ' edit karyawan | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection
@section('content')
    <h2>Edit Karyawan</h2>
    <div class="box p-3 bg-white">
        <div class="col-md-5">
            <form action="/karyawan/edit/{{ $karyawan->id_karyawan }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_karyawan" id="" class="form-control"
                        value="{{ $karyawan->nama_karyawan }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="" class="form-control" value="{{ $karyawan->alamat }}">
                </div>
                <div class="form-group">
                    <label for="nomor">Nomor</label>
                    <input type="number" name="nomor" id="" class="form-control" value="{{ $karyawan->telepon }}">
                </div>
                <div class="form-group">
                    <label for="shift">Shift</label>
                    <select name="id_shift" id="shift" class="form-control">
                        <option selected value="{{ $karyawan->id_shift }}">{{ $karyawan->nama_shift }}</option>
                        @foreach ($shift as $s)
                            <option value="{{ $s->id_shift }}">{{ $s->nama_shift }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <img src="{{ url('images/' . $karyawan->foto . '') }}" alt="" width="50">
                    <input type="file" name="foto" id="" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                <a href="{{ route('karyawan') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection
