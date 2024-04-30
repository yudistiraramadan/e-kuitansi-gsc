<?php

namespace Database\Seeders;

use App\Models\Kuitansi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KuitansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kuitansi::create([
            'pengaju' => 'Kentang Mustofa',
            'nominal' => 500000,
            'terbilang' => 'LIMA RATUS RIBU RUPIAH',
            'keperluan' => 'Kotak Infaq',
            'jenis_kuitansi' => 'pemasukan',
            'pembayaran' => 'tunai',
            'tanggal' => '2024-04-30',
        ]);
        Kuitansi::create([
            'pengaju' => 'Farhan Kebab',
            'nominal' => 120000,
            'terbilang' => 'SERATUS DUA PULUH RIBU RUPIAH',
            'keperluan' => 'Uang Makan Basecamp',
            'jenis_kuitansi' => 'penerimaan_barang',
            'pembayaran' => 'transfer',
            'tanggal' => '2024-04-30',
        ]);
        Kuitansi::create([
            'pengaju' => 'Sigit Rendang',
            'nominal' => 80000,
            'terbilang' => 'DELAPAN PULUH RIBU RUPIAH',
            'keperluan' => 'Pentasyarufan',
            'jenis_kuitansi' => 'pengeluaran',
            'pembayaran' => 'lainnya',
            'tanggal' => '2024-04-30',
        ]);
    }
}
