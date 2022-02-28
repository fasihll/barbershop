@extends('admin.template')
@section('title', ' Dashboard | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/tambahShift.css') }}">
@endsection
@section('content')
    <h2>Tambah Shift</h2>
    <div class="box bg-white p-4">
        <div class="col-md-5">
            <form action="/shift/update/{{ $shift->id_shift }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_shift">Nama Shift</label>
                    <input type="text" name="nama_shift" id="nama_shift" class="form-control"
                        value="{{ $shift->nama_shift }}">
                </div>
                <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control"
                        value="{{ $shift->jam_mulai }}">
                </div>
                <div class="form-group">
                    <label for="jam_akhir">Jam Akhir</label>
                    <input type="time" name="jam_akhir" id="jam_akhir" class="form-control"
                        value="{{ $shift->jam_mulai }}">
                </div>
                <button type="submit" class=" btn btn-success">Ubah</button>
                <a href="{{ route('shift') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
@endsection
