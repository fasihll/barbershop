@extends('admin.template')
@section('title', ' Dashboard | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/tambahShift.css') }}">
@endsection
@section('content')
    <h2>Tambah Shift</h2>
    <div class="box bg-white p-4">
        <div class="col-md-5">
            <form action="{{ route('tambahShift') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_shift">Nama Shift</label>
                    <input type="text" name="nama_shift" id="nama_shift"
                        class="form-control @error('nama_shift') is-invalid @enderror">
                    @error('nama_shift')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input type="time" name="jam_mulai" id="jam_mulai"
                        class="form-control @error('jam_mulai') is-invalid @enderror">
                    @error('jam_mulai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jam_akhir">Jam Akhir</label>
                    <input type="time" name="jam_akhir" id="jam_akhir"
                        class="form-control @error('jam_akhir') is-invalid @enderror">
                    @error('jam_akhir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class=" btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
@endsection
