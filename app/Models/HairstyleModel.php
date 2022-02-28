<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HairstyleModel extends Model
{
    use HasFactory;
    public function getAll()
    {
        return DB::table('hairstyle')->paginate(5);
    }
    public function getbyid($id_hairstyle)
    {
        return DB::table('hairstyle')->where(['id_hairstyle' => $id_hairstyle])->first();
    }
    public function tambah($data)
    {
        DB::table('hairstyle')->insert($data);
    }
    public function ubah($id_hairstyle, $data)
    {
        DB::table('hairstyle')->where(['id_hairstyle' => $id_hairstyle])->update($data);
    }
}
