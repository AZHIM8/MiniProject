<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Barang
        $barang = [
            [
                'kode_barang' => 'B001',
                'nama_barang' => 'Laptop Asus',
                'harga_barang' => 8000000,
                'deskripsi_barang' => 'Laptop dengan spesifikasi tinggi',
                'satuan_id' => Satuan::where('kode_satuan', 'PCS')->first()->id
            ],
            [
                'kode_barang' => 'B002',
                'nama_barang' => 'Beras Organik',
                'harga_barang' => 15000,
                'deskripsi_barang' => 'Beras organik berkualitas tinggi',
                'satuan_id' => Satuan::where('kode_satuan', 'KG')->first()->id
            ],
            [
                'kode_barang' => 'B003',
                'nama_barang' => 'Air Mineral',
                'harga_barang' => 3000,
                'deskripsi_barang' => 'Air mineral kemasan 600ml',
                'satuan_id' => Satuan::where('kode_satuan', 'LTR')->first()->id
            ],
            [
                'kode_barang' => 'B004',
                'nama_barang' => 'Kain Katun',
                'harga_barang' => 25000,
                'deskripsi_barang' => 'Kain katun 100% berkualitas',
                'satuan_id' => Satuan::where('kode_satuan', 'MTR')->first()->id
            ],
            [
                'kode_barang' => 'B005',
                'nama_barang' => 'Kertas HVS',
                'harga_barang' => 35000,
                'deskripsi_barang' => 'Kertas HVS A4 80 gsm',
                'satuan_id' => Satuan::where('kode_satuan', 'BOX')->first()->id
            ],
        ];

        foreach ($barang as $data) {
            Barang::create($data);
        }
    }
}
