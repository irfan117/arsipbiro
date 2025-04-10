<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Tu;
use App\Models\Yandas;
use App\Models\Bms;
use App\Models\Npd;

class DashboardController extends BaseController
{
    public function index()
    {
        // Ambil data paginasi
        $tu = Tu::paginate(5);
        $yandas = Yandas::paginate(5);
        $bms = Bms::paginate(5);
        $npd = Npd::paginate(5);
    
        // Hitung jumlah total data
        $totalTu = Tu::count();
        $totalYandas = Yandas::count();
        $totalBms = Bms::count();
        $totalNpd = Npd::count();
    
        // Kirim semuanya ke view
        return view('dashboard', compact(
            'tu', 'yandas', 'bms', 'npd',
            'totalTu', 'totalYandas', 'totalBms', 'totalNpd'
        ));
    }
    
}
