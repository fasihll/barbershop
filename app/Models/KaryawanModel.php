<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaryawanModel extends Model
{
    use HasFactory;

    public function getkaryawan()
    {
        return DB::table('karyawan')
            ->leftJoin('shift', 'karyawan.id_shift', '=', 'shift.id_shift')
            ->paginate(5);
    }
    public function getShift()
    {
        return DB::table('shift')->get();
    }
    public function tambah($data)
    {
        DB::table('karyawan')->insert($data);
    }
    public function getkaryawanbyid($id_karyawan)
    {
        return DB::table('karyawan')
            ->where(['id_karyawan' => $id_karyawan])
            ->leftJoin('shift', 'karyawan.id_shift', '=', 'shift.id_shift')
            ->first();
    }
    public function ubah($id_karyawan, $data)
    {
        DB::table('karyawan')->where(['id_karyawan' => $id_karyawan])->update($data);
    }
}
