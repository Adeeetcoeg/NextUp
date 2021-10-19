<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = [
            ['nama_supplier'=>'xCoeg', 'nama'=>'dia','alamat' => 'Sukamenak', 'kota' => 'Bandung', 'kode_post' => 666],
            ['nama_supplier'=>'Rimenn', 'nama'=>'her','alamat' => 'kopo', 'kota' => 'Bandung', 'kode_post' => 666],
            ['nama_supplier'=>'jooo', 'nama'=>'she','alamat' => 'Sukamenak indah', 'kota' => 'Bandung', 'kode_post' => 666],
            ['nama_supplier'=>'Adya', 'nama'=>'him','alamat' => 'teing', 'kota' => 'Bandung', 'kode_post' => 666],
            ['nama_supplier'=>'Adzurra', 'nama'=>'he','alamat' => 'cangkuang', 'kota' => 'Bandung', 'kode_post' => 666],
            ];

            DB::table('Supplier')->insert($supplier);
    }
}
