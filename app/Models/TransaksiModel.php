<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiModel extends Model
{
    use HasFactory;
    public function getKaryawan()
    {
        return DB::table('karyawan')
            ->leftJoin('shift', 'karyawan.id_shift', '=', 'shift.id_shift')
            ->get();
    }
    public function getHairstyle()
    {
        return DB::table('hairstyle')->get();
    }
    public function simpan($data)
    {
        DB::table('transaksi')->insert($data);
    }
}
