<?php

namespace App\Http\Controllers;

use App\Models\Kuitansi;
use Illuminate\Http\Request;

class KuitansiController extends Controller
{
    public function index(){
        $data = Kuitansi::all();
        // dd($data);
        return view('kuitansi.daftar-kuitansi', ['title'=>'Daftar Kuitansi'], compact('data'));
    }

    public function create(){
        return view('kuitansi.tambah', ['title'=>'Tambah Kuitansi']);
    }
}
