@extends('admin.template')
@section('title', ' Laporan Transaksi | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/transaksi.css') }}">
@endsection
@section('content')
    <h2 class="text-center">Laporan</h2>
    <h4 class="text-center">Transaksi</h4>
    <table class="table table-hover">
        <thead>
            <tr class="bg-white">
                <th>ID Trasnsaksi</th>
                <th>Nama Pelanggan</th>
                <th>Nama Karyawan</th>
                <th>Hairstyle</th>
                <th>Jumlah Bayar</th>
                <th>Kembalian</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $l)
                <tr>
                    <td>{{ $l->id_transaksi }}</td>
                    <td>{{ $l->nama_pelanggan }}</td>
                    <td>{{ $l->nama_karyawan }}</td>
                    <td>{{ $l->nama_hairstyle }}</td>
                    <td>{{ $l->jumlah_bayar }}</td>
                    <td>{{ $l->kembalian }}</td>
                    <td>{{ $l->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
