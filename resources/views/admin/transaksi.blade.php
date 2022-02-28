@extends('admin.template')
@section('title', ' Transaksi | Barbeshop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/Transaksi.css') }}">
@endsection
@section('content')
    <h2>Transaksi</h2>
    <div class="box bg-white p-3">
        <form action="{{ route('simpan-transaksi') }}" method="post">
            @csrf
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama"
                            class="form-control @error('nama_pelanggan') is-invalid @enderror">
                        @error('nama_pelanggan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal transaksi</label>
                        <input type="datetime-local" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is-invalid @enderror">
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nama">Nama Karyawan</label>
                        <select name="id_karyawan" id="" class="form-control @error('id_karyawan') is-invalid @enderror">
                            <option value="" selected hidden>Pilih Karyawan</option>
                            @foreach ($karyawan as $k)
                                <option value="{{ $k->id_karyawan }}">{{ $k->nama_karyawan }} |
                                    {{ $k->nama_shift }}</option>
                            @endforeach
                        </select>
                        @error('id_karyawan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hairstyle">Hairstyle</label>
                        <select name="id_hairstyle" id="hairstyle"
                            class="form-control @error('id_hairstyle') is-invalid @enderror">
                            <option value="" selected hidden>Pilih Hairstyle</option>
                            @foreach ($hairstyle as $h)
                                <option value="{{ $h->id_hairstyle }}" harga="{{ $h->harga }}">
                                    {{ $h->nama_hairstyle }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_hairstyle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="Harga" id="harga" class="form-control" placeholder="Harga"
                            style="height: 120px; text-align: center; font-size: 3rem" readonly>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="bayar">Bayar</label>
                        <input type="number" name="jumlah_bayar" id="bayar"
                            class="form-control @error('jumlah_bayar') is-invalid @enderror" placeholder="Rp.">
                        @error('jumlah_bayar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kembalian">Kembalian</label>
                        <input type="number" name="kembalian" id="kembalian" class="form-control" placeholder="Rp."
                            readonly>
                        <button type="submit" name="submit" class="btn btn-success mt-3">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('jquery')
    <script>
        $('#bayar').keyup(function() {
            var harga = $('#harga').val();
            var bayar = $(this).val();
            var kembalian = bayar - harga;
            $('#kembalian').val(kembalian);
        });

        $('#hairstyle').on('change', function() {
            var harga = $('#hairstyle option:selected').attr('harga');
            $('#harga').val(harga);
        });

    </script>
@endsection
