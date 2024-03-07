<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'SMGGS21',
                'barang_nama' => 'Samsung Galaxy S21',
                'harga_beli' => 10000000,
                'harga_jual' => 12500000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'APLWS7',
                'barang_nama' => 'Apple Watch Series 7',
                'harga_beli' => 5000000,
                'harga_jual' => 6250000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'LVS501OF',
                'barang_nama' => 'Levis 501 Original Fit',
                'harga_beli' => 500000,
                'harga_jual' => 700000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'ADDULT',
                'barang_nama' => 'Adidas Ultraboost',
                'harga_beli' => 1500000,
                'harga_jual' => 1875000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'LGFDR',
                'barang_nama' => 'LG French Door Refrigerator',
                'harga_beli' => 20000000,
                'harga_jual' => 24500000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'NNJPB',
                'barang_nama' => 'Ninja Professional Blender',
                'harga_beli' => 1000000,
                'harga_jual' => 1250000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'PLTG2',
                'barang_nama' => 'Pilot G2',
                'harga_beli' => 20000,
                'harga_jual' => 22000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'MLSKNCLSN',
                'barang_nama' => 'Moleskine Classic Notebook',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'TTJTMTKMLI',
                'barang_nama' => 'Tong Tji Tematik Matcha Latte Instant [3 Sachets]',
                'harga_beli' => 5000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'SDPMIG',
                'barang_nama' => 'Sedaap Mie Instan Goreng Isi 5 Bag 90 gr',
                'harga_beli' => 9000,
                'harga_jual' => 14000,
            ],
        ];
        DB::table('m_barang') -> insert($data);
    }
}
