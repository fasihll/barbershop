<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\KaryawanModel;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('operator');
        $this->KaryawanModel = new KaryawanModel();
    }
    public function index()
    {
        $data = [
            'karyawan' => $this->KaryawanModel->getKaryawan()
        ];
        return view('admin.karyawan', $data);
    }
    public function tambah()
    {
        $data = [
            'shift' => $this->KaryawanModel->getShift()
        ];
        return view('admin.tambahkaryawan', $data);
    }
    public function insert(Request $request)
    {


        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'nomor' => 'required|numeric',
            'id_shift' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);

        $file = $request->foto;
        $filename = Str::random(20) . "." . $file->extension();
        $file->move(public_path('images'), $filename);

        $data = [
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'telepon' => $request->nomor,
            'foto' => $filename,
            'id_shift' => $request->id_shift
        ];
        $this->KaryawanModel->tambah($data);
        return redirect()->route('karyawan')->with('message', 'Data Berhasil Di tambahakan!!');
    }
    public function detail($id_karyawan)
    {
        $data = [
            'karyawan' => $this->KaryawanModel->getKaryawanbyid($id_karyawan)
        ];
        return view('admin.detailKaryawan', $data);
    }
    public function edit($id_karyawan)
    {
        $data = [
            'karyawan' => $this->KaryawanModel->getKaryawanbyid($id_karyawan),
            'shift' => $this->KaryawanModel->getShift()
        ];
        return view('admin.editKaryawan', $data);
    }
    public function update(Request $request, $id_karyawan)
    {
        $data =  $this->KaryawanModel->getKaryawanbyid($id_karyawan);
        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'nomor' => 'required|numeric',
            'id_shift' => 'required',
            'foto' => 'mimes:jpg,png,jpeg|max:1024'
        ]);

        if ($request->foto != "") {
            if ($data->foto != "" and $data->foto != null) {
                unlink(public_path('images/' . $data->foto . ''));
            }
            $file = $request->foto;
            $filename = Str::random(20) . "." . $file->extension();
            $file->move(public_path('images'), $filename);

            $data = [
                'nama_karyawan' => $request->nama_karyawan,
                'alamat' => $request->alamat,
                'telepon' => $request->nomor,
                'foto' => $filename,
                'id_shift' => $request->id_shift
            ];
            $this->KaryawanModel->ubah($id_karyawan, $data);
        } else {
            $data = [
                'nama_karyawan' => $request->nama_karyawan,
                'alamat' => $request->alamat,
                'telepon' => $request->nomor,
                'id_shift' => $request->id_shift
            ];
            $this->KaryawanModel->ubah($id_karyawan, $data);
        }
        return redirect()->route('karyawan')->with('message', 'Data Berhasil Di Update');
    }
    public function delete($id_karyawan)
    {
        $data =  $this->KaryawanModel->getKaryawanbyid($id_karyawan);
        if ($data->foto != "") {
            unlink(public_path('images/' . $data->foto . ''));
        }
        DB::table('karyawan')->where(['id_karyawan' => $id_karyawan])->delete();
        return redirect()->route('karyawan')->with('message', 'Data Berhasil Di hapus');
    }
}
