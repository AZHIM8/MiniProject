<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satuan = [
            ['kode_satuan' => 'PCS', 'nama_satuan' => 'Pieces'],
            ['kode_satuan' => 'KG', 'nama_satuan' => 'Kilogram'],
            ['kode_satuan' => 'LTR', 'nama_satuan' => 'Liter'],
            ['kode_satuan' => 'MTR', 'nama_satuan' => 'Meter'],
            ['kode_satuan' => 'BOX', 'nama_satuan' => 'Box'],
        ];

        foreach ($satuan as $data) {
            Satuan::create($data);
    }
}

}
