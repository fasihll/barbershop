@extends('admin.template')
@section('title', ' Laporan | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection
@section('content')
    <h2 class="text-center p-2">Laporan</h2>
    <p class="text-center">Shift Karyawan {{ date('Y') }}</p>
    <hr>
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>alamat</th>
                <th>telepon</th>
                <th>shift</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($Lkaryawan as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->nama_karyawan }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>{{ $k->telepon }}</td>
                    <td>{{ $k->nama_shift }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
