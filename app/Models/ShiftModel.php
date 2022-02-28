<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShiftModel extends Model
{
    public function getall()
    {
        return DB::table('shift')->paginate(5);
    }
    public function tambah($data)
    {
        DB::table('shift')->insert($data);
    }
    public function getShiftid($id_shift)
    {
        return DB::table('shift')->where(['id_shift' => $id_shift])->first();
    }
    public function ubah($data, $id_shift)
    {
        DB::table('shift')->where(['id_shift' => $id_shift])->update($data);
    }
}
