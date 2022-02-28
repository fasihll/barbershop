@extends('admin.template')
@section('title', ' karyawan | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/karyawan.css') }}">
@endsection
@section('content')
    <h2>Karyawan</h2>
    <a href="/karyawan/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Karyawan</a>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table bg-light">
        <thead class="bg-white">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Telpon</th>
                <th>Shift</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $karyawan->firstItem(); ?>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>
                        <img src="{{ url('images/' . $k->foto . '') }}" alt="" width="50">
                    </td>
                    <td>{{ $k->nama_karyawan }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>{{ $k->telepon }}</td>
                    <td>{{ $k->nama_shift }}</td>
                    <td>
                        <a href="/karyawan/detail/{{ $k->id_karyawan }}" class="fa fa-eye btn btn-white btn-sm"></a>
                        <a href="/karyawan/edit/{{ $k->id_karyawan }}" class="fa fa-edit btn btn-secondary btn-sm"></a>
                        <a href="/karyawan/delete/{{ $k->id_karyawan }}" class="fa fa-trash btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda Yakin?')"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $karyawan->links('pagination::bootstrap-4') }}



@endsection
