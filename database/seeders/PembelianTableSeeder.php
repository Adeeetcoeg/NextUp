<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_pembelian'=>'frist', 'nama_barang'=>'Laptop gaming','nama_supplier' => 'xcoeg', 'qty' => 3, 'tgl' => 20210210],
            ['nama_pembelian'=>'frist', 'nama_barang'=>'Motor','nama_supplier' => 'Riman', 'qty' => 5, 'tgl' => 20210210],
            ['nama_pembelian'=>'frist', 'nama_barang'=>'Mobill','nama_supplier' => 'joo', 'qty' => 6, 'tgl' => 20210210],
            ['nama_pembelian'=>'frist', 'nama_barang'=>'Kereta','nama_supplier' => 'fitri', 'qty' => 5, 'tgl' => 20210210],
            ['nama_pembelian'=>'frist', 'nama_barang'=>'Pesawat','nama_supplier' => 'Adzurra', 'qty' =>6, 'tgl' => 20210210],
            ];

            DB::table('pembelian')->insert($pembelian);
    }
}
