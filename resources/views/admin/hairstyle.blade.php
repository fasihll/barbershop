@extends('admin.template')
@section('title', ' hairstyle | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/hairsryle.css') }}">
@endsection
@section('content')
    <h2>hairstyle</h2>
    <a href="/hairstyle/tambah" class="btn btn-primary"><i class="fa fa-plus"></i>
        Hairstyle</a>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr class="bg-white">
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>harga</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $hairstyle->firstItem(); ?>
            @foreach ($hairstyle as $h)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>
                        <img src="{{ url('images/' . $h->foto . '') }}" alt="" width="50">
                    </td>
                    <td>{{ $h->nama_hairstyle }}</td>
                    <td>{{ $h->harga }}</td>
                    <td>{{ $h->description }}</td>
                    <td>
                        <a href="/hairstyle/detail/{{ $h->id_hairstyle }}" class="btn btn-white btn-sm"><i
                                class="fa fa-eye"></i></a>
                        <a href=/hairstyle/edit/{{ $h->id_hairstyle }}"" class="btn btn-secondary btn-sm"><i
                                class="fa fa-edit"></i></a>
                        <a href="/hairstyle/delete/{{ $h->id_hairstyle }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin!!')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $hairstyle->links('pagination::bootstrap-4') }}
@endsection
