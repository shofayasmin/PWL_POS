<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'rina',
                'penjualan_kode' => '20240307-001',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'rini',
                'penjualan_kode' => '20240307-002',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'rino',
                'penjualan_kode' => '20240307-003',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'roni',
                'penjualan_kode' => '20240307-004',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'rana',
                'penjualan_kode' => '20240307-005',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'rani',
                'penjualan_kode' => '20240307-006',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'roy',
                'penjualan_kode' => '20240307-007',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'rey',
                'penjualan_kode' => '20240307-008',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'reni',
                'penjualan_kode' => '20240307-009',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 2,
                'pembeli' => 'reno',
                'penjualan_kode' => '20240307-010',
                'penjualan_tanggal' => '2024-03-07',
            ],
        ];
        DB::table('t_penjualan') -> insert($data);
    }
}
