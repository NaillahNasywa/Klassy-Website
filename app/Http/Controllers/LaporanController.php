<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use PDF; //library pdf

class LaporanController extends Controller
{
    public function index(){
        //menampilkan halaman laporan
        return view('menu.index');
    }

    public function export(){
        
    
        $data= Menu::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('laporan_pdf');
        return $pdf->download('laporan.pdf');
    
    }
}