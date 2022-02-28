<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanModel extends Model
{
    use HasFactory;
    public function Lapkaryawan()
    {
        return  DB::table('karyawan')
            ->leftJoin('shift', 'karyawan.id_shift', '=', 'shift.id_shift');
    }
    public function lapTransaksi()
    {
        return DB::table('transaksi')
            ->join('karyawan', 'karyawan.id_karyawan', '=', 'transaksi.id_karyawan')
            ->join('hairstyle', 'transaksi.id_hairstyle', '=', 'hairstyle.id_hairstyle')
            ->select('transaksi.id_transaksi', 'transaksi.nama_pelanggan', 'karyawan.nama_karyawan', 'hairstyle.nama_hairstyle', 'transaksi.jumlah_bayar', 'transaksi.kembalian', 'transaksi.tanggal');
    }
}
