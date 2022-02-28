<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShiftModel;
use Illuminate\Support\Facades\DB;

class ShiftController extends Controller
{

    public function __construct()
    {
        $this->middleware('operator');
        $this->ShiftModel = new ShiftModel();
    }
    public function index()
    {
        $data = [
            'shift' => $this->ShiftModel->getall()
        ];
        return view('admin.shift', $data);
    }

    public function tambah()
    {
        return view('admin.tambahShift');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama_shift' => 'required',
            'jam_mulai' => 'required',
            'jam_akhir' => 'required',
        ]);
        $data = [
            'nama_shift' => $request->nama_shift,
            'jam_mulai' => $request->jam_mulai,
            'jam_akhir' => $request->jam_akhir,
        ];
        $this->ShiftModel->tambah($data);
        return redirect()->route('shift')->with('message', 'Data Berhasil Di Tambahkan!');
    }

    public function detail($id_shift)
    {
        $data = [
            'shift' => $this->ShiftModel->getShiftid($id_shift)
        ];
        return view('admin.detailShift', $data);
    }
    public function ubah($id_shift)
    {
        $data = [
            'shift' => $this->ShiftModel->getShiftid($id_shift)
        ];
        return view('admin.updateShift', $data);
    }
    public function update(Request $request, $id_shift)
    {
        $request->validate([
            'nama_shift' => 'required',
            'jam_mulai' => 'required',
            'jam_akhir' => 'required',
        ]);
        $data = [
            'nama_shift' => $request->nama_shift,
            'jam_mulai' => $request->jam_mulai,
            'jam_akhir' => $request->jam_akhir,
        ];
        $this->ShiftModel->ubah($data, $id_shift);
        return redirect()->route('shift')->with('message', 'Data Berhsil di Update!');
    }
    public function delete($id_shift)
    {
        DB::table('shift')->where(['id_shift' => $id_shift])->delete();
        return redirect()->route('shift')->with('message', 'Data Berhasil Di Hapus');
    }
}
