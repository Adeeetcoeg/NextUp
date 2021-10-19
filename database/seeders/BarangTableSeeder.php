<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['id_barang'=> 1 , 'nama'=>'xCoeg','varian' => 'new','harga_beli' => 10000,'harga_jual' => 150000],
            ['id_barang'=> 2 , 'nama'=>'Rimann','varian' => 'new','harga_beli' => 150000,'harga_jual' => 2500000],
            ['id_barang'=> 3 , 'nama'=>'Jooo','varian' => 'new','harga_beli' => 250000,'harga_jual' => 5500000],
            ];

            DB::table('barang')->insert($barang);
    }
}
