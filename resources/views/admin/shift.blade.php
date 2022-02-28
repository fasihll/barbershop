@extends('admin.template')
@section('title', ' Shift | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/shift.css') }}">
@endsection
@section('content')
    <h2>Shift Karyawan</h2>
    <div class="box">
        <a href="/shift/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Shift</a>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table class="table">
            <thead class=" bg-white">
                <tr>
                    <th>No</th>
                    <th>Nama Shift</th>
                    <th>Jam Shift</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $shift->firstItem(); ?>
                @foreach ($shift as $s)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $s->nama_shift }}</td>
                        <td>{{ $s->jam_mulai }} sd {{ $s->jam_akhir }}</td>
                        <td>
                            <a href="/shift/detail/{{ $s->id_shift }}" class="btn btn-light btn-sm"><i
                                    class=" fa fa-eye"></i></a>
                            <a href="/shift/update/{{ $s->id_shift }}" class="btn btn-secondary btn-sm"><i
                                    class="fa fa-edit"></i></a>
                            <a href="/shift/delete/{{ $s->id_shift }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah anda yakin!!')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $shift->links('pagination::bootstrap-4') }}
    </div>
@endsection
