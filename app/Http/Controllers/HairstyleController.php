<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HairstyleModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HairstyleController extends Controller
{

    public function __construct()
    {
        $this->middleware('operator');
        $this->HairstyleModel = new HairstyleModel();
    }
    public function index()
    {
        $data = [
            'hairstyle' => $this->HairstyleModel->getAll()
        ];
        return view('admin.hairstyle', $data);
    }
    public function tambah()
    {
        return view('admin.addHairstyle');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'nama_hairstyle' => 'required',
            'harga' => 'required|numeric',
            'description' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg',
        ]);

        $file = $request->foto;
        $filename = Str::random(20) . "." . $file->extension();
        $file->move(public_path('images'), $filename);

        $data = [
            'nama_hairstyle' => $request->nama_hairstyle,
            'harga' => $request->harga,
            'description' => $request->description,
            'foto' => $filename
        ];

        $this->HairstyleModel->tambah($data);
        return redirect()->route('hairstyle')->with('message', 'Data Berhasil Di tambahkan!!');
    }
    public function detail($id_hairstyle)
    {
        $data = [
            'hairstyle' => $this->HairstyleModel->getbyid($id_hairstyle)
        ];
        return view('admin.detailHairstyle', $data);
    }
    public function edit($id_hairstyle)
    {
        $data = [
            'hairstyle' => $this->HairstyleModel->getbyid($id_hairstyle)
        ];
        return view('admin.editHairstyle', $data);
    }
    public function update(Request $request, $id_hairstyle)
    {
        $foto = $this->HairstyleModel->getbyid($id_hairstyle);
        $request->validate([
            'nama_hairstyle' => 'required',
            'harga' => 'required|numeric',
            'description' => 'required',
            'foto' => 'mimes:jpg,png,jpeg',
        ]);

        if ($request->foto != "") {
            if ($foto->foto != "" and $foto->foto != null) {
                unlink(public_path('images/' . $foto->foto . ''));
            }
            $file = $request->foto;
            $filename = Str::random(20) . "." . $file->extension();
            $file->move(public_path('images'), $filename);

            $data = [
                'nama_hairstyle' => $request->nama_hairstyle,
                'harga' => $request->harga,
                'description' => $request->description,
                'foto' => $filename
            ];
            $this->HairstyleModel->ubah($id_hairstyle, $data);
        } else {
            $data = [
                'nama_hairstyle' => $request->nama_hairstyle,
                'harga' => $request->harga,
                'description' => $request->description,
            ];
            $this->HairstyleModel->ubah($id_hairstyle, $data);
        }

        return redirect()->route('hairstyle')->with('message', 'Data Berhasil Di update!!');
    }
    public function delete($id_hairstyle)
    {
        $foto = $this->HairstyleModel->getbyid($id_hairstyle);
        if ($foto->foto != '' and $foto->foto != null) {
            unlink(public_path('images/' . $foto->foto . ''));
        }
        DB::table('hairstyle')->where(['id_hairstyle' => $id_hairstyle])->delete();
        return redirect()->route('hairstyle')->with('message', 'Data Berhasil Di hapus!!');
    }
}
