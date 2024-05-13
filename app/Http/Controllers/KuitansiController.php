<?php

namespace App\Http\Controllers;

use App\Models\Kuitansi;
use Illuminate\Http\Request;
use App\Exports\KuitansiExcel;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class KuitansiController extends Controller
{
    public function dashboard(){
        return view('dashboard', ['title'=>'Dashboard']);
    }

    public function index(){
        $kuitansi = Kuitansi::orderBy('tanggal','desc')->get();
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
        
        $nominal = str_replace('.', '', $request->nominal);
        
        Kuitansi::create([
            'pengaju' => $request -> pengaju,
            'nominal' => $nominal,
            'terbilang' => $request -> terbilang,
            'keperluan' => $request -> keperluan,
            'jenis_kuitansi' => $request -> jenis_kuitansi,
            'pembayaran' => $request -> pembayaran,
            'tanggal' => $request -> tanggal,
        ]);
        return redirect()->route('daftarKuitansi')->with('success','Kuitansi berhasil ditambahkan');
    }

    public function edit($id){
        $kuitansi = Kuitansi::findOrFail($id);
        return view('kuitansi.edit', ['title'=>'Edit Kuitansi'], compact('kuitansi'));
    }

    public function update(Request $request, $id){
        $kuitansi = Kuitansi::findOrFail($id);
        
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
        
        $nominal = str_replace('.', '', $request->nominal);
        $kuitansi->update([
            'pengaju' => $request -> pengaju,
            'nominal' => $nominal,
            'terbilang' => $request -> terbilang,
            'keperluan' => $request -> keperluan,
            'jenis_kuitansi' => $request -> jenis_kuitansi,
            'pembayaran' => $request -> pembayaran,
            'tanggal' => $request -> tanggal,
        ]);
        return redirect()->route('daftarKuitansi')->with('success', 'Kuitansi berhasil diedit');
    }

    public function delete(Request $request){
        $kuitansi = Kuitansi::find($request->get('id'));
        $kuitansi->delete();
        return redirect()->route('daftarKuitansi')->with('success','Kuitansi berhasil dihapus');
    }

    public function print(Request $request){
        $kuitansi = Kuitansi::findOrFail($request->id);
        $pdf = Pdf::loadView('kuitansi.print', compact('kuitansi'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('e-kuitansi.pdf');
    }

    public function export(){
        return Excel::download(new KuitansiExcel, 'kuitansi.xlsx');
    }
}
