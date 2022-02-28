<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiModel;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('kasir');
        $this->TransaksiModel = new TransaksiModel();
    }
    public function index()
    {
        $data = [
            'karyawan' => $this->TransaksiModel->getKaryawan(),
            'hairstyle' => $this->TransaksiModel->getHairstyle()
        ];
        return view('admin.transaksi', $data);
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required',
            'id_hairstyle' => 'required',
            'nama_pelanggan' => 'required',
            'tanggal' => 'required',
            'jumlah_bayar' => 'required',
            'kembalian' => 'required',
        ]);
        $data = [
            'id_karyawan' => $request->id_karyawan,
            'id_hairstyle' => $request->id_hairstyle,
            'nama_pelanggan' => $request->nama_pelanggan,
            'tanggal' => $request->tanggal,
            'jumlah_bayar' => $request->jumlah_bayar,
            'kembalian' => $request->kembalian,
        ];
        $this->TransaksiModel->simpan($data);
        return redirect()->route('transaksi')->with('message', 'Transaksi Berhasil di sinpan!');
    }
}
