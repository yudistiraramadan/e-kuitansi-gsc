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
            'jenis_kuitansi' => 'Zakat',
            'pembayaran' => 'Tunai',
            'tanggal' => '2024-04-30',
        ]);
        Kuitansi::create([
            'pengaju' => 'Farhan Kebab',
            'nominal' => 120000,
            'terbilang' => 'SERATUS DUA PULUH RIBU RUPIAH',
            'keperluan' => 'Uang Makan Basecamp',
            'jenis_kuitansi' => 'Wakaf',
            'pembayaran' => 'Transfer',
            'tanggal' => '2024-04-30',
        ]);
        Kuitansi::create([
            'pengaju' => 'Sigit Rendang',
            'nominal' => 80000,
            'terbilang' => 'DELAPAN PULUH RIBU RUPIAH',
            'keperluan' => 'Pentasyarufan',
            'jenis_kuitansi' => 'Sedekah',
            'pembayaran' => 'Lainnya',
            'tanggal' => '2024-04-30',
        ]);
        // Kuitansi::create([
        //     'pengaju' => 'Yudistira Tampan MasyaAllah',
        //     'nominal' => 500000000,
        //     'terbilang' => 'LIMA RATUS JUTA RUPIAH',
        //     'keperluan' => 'Pembangunan Rumah Sholeh',
        //     'jenis_kuitansi' => 'Pemasukan',
        //     'pembayaran' => 'Transfer',
        //     'tanggal' => '2024-04-30',
        // ]);
        // Kuitansi::create([
        //     'pengaju' => 'Juan Pristel',
        //     'nominal' => 1000000,
        //     'terbilang' => 'SATU JUTA RUPIAH',
        //     'keperluan' => 'Bantu Banjir Kawunganten',
        //     'jenis_kuitansi' => 'Pemasukan',
        //     'pembayaran' => 'Tunai',
        //     'tanggal' => '2024-04-30',
        // ]);
        // Kuitansi::create([
        //     'pengaju' => 'Afiq Kopling',
        //     'nominal' => 50000000,
        //     'terbilang' => 'LIMA PULUH JUTA RUPIAH',
        //     'keperluan' => 'Pembangunan Mutan Foundation',
        //     'jenis_kuitansi' => 'Pemasukan',
        //     'pembayaran' => 'Tunai',
        //     'tanggal' => '2024-04-30',
        // ]);
    }
}
