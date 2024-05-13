<?php

namespace App\Exports;

use App\Models\Kuitansi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// class KuitansiExcel implements FromCollection
class KuitansiExcel implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        // return view ('kuitansi.export-excel',
        // [
        //     'kuitansi' => Kuitansi::all()
        // ]);
        
        $kuitansi = Kuitansi::all();
        return view('kuitansi.export-excel', compact('kuitansi'));
    }
    
}
