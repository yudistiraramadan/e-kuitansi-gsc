<?php

namespace App\Http\Controllers;

use App\Models\Kuitansi;
use Illuminate\Http\Request;

class KuitansiController extends Controller
{
    public function dashboard(){
        return view('dashboard', ['title'=>'Dashboard']);
    }

    public function index(){
        $kuitansi = Kuitansi::all();
        
        // dd($kuitansi);
        return view('kuitansi.daftar-kuitansi', ['title'=>'Daftar Kuitansi'], compact('kuitansi'));
    }
    
    public function create(){
        $jenisKuitansi = Kuitansi::pluck('jenis_kuitansi');
        $pembayaran = Kuitansi::pluck('pembayaran');
        return view('kuitansi.tambah', ['title'=>'Tambah Kuitansi'], compact('jenisKuitansi','pembayaran'));
    }
}
