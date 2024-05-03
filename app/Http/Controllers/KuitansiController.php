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

    public function store(Request $request){
        // validation
        $request->validate(
            [
                'pengaju'=>'required',
                'nominal'=>'required',
                'terbilang'=>'required',
                'keperluan'=>'required',
                'jenis_kuitansi'=>'required',
                'pembayaran'=>'required',
                'tanggal'=>'required',
            ],
            [
                'pengaju.required' => 'data tidak boleh kosong',
                'nominal.required' => 'data tidak boleh kosong',
                'terbilang.required' => 'data tidak boleh kosong',
                'keperluan.required' => 'data tidak boleh kosong',
                'jenis_kuitansi.required' => 'data tidak boleh kosong',
                'pembayaran.required' => 'data tidak boleh kosong',
                'tanggal.required' => 'data tidak boleh kosong',
            ]
            );

        // create kuitansi
        Kuitansi::create([
            'pengaju' => $request -> pengaju,
            'nominal' => $request -> nominal,
            'terbilang' => $request -> terbilang,
            'keperluan' => $request -> keperluan,
            'jenis_kuitansi' => $request -> jenis_kuitansi,
            'pembayaran' => $request -> pembayaran,
            'tanggal' => $request -> tanggal,
        ]);
        return redirect()->route('daftarKuitansi');
    }

    public function edit($id){
        $kuitansi = Kuitansi::findOrFail($id);
        return view('kuitansi.edit', ['title'=>'Edit Kuitansi'], compact('kuitansi'));
    }
}
