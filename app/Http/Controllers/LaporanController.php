<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanModel;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner');
        $this->LaporanModel = new LaporanModel();
    }
    public function index()
    {
        $data = [
            'Lkaryawan' => $this->LaporanModel->LapKaryawan()->get(),
            'count' => $this->LaporanModel->LapKaryawan()->count()
        ];
        return view('admin.laporanKaryawan', $data);
    }
    public function transaksi()
    {
        $data = [
            'laporan' => $this->LaporanModel->lapTransaksi()->get(),
            'count' => $this->LaporanModel->lapTransaksi()->count()
        ];
        return view('admin.laporanTransaksi', $data);
    }
}
