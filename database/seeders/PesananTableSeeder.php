<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pesanan'=>1, 'nama_pelanggan'=>'xCoeg','nama_barang' => 'Laptop gaming', 'qty' => 3, 'tanggal_pesan' => 20210210],
            ['nama_pesanan'=>2, 'nama_pelanggan'=>'Riman','nama_barang' => 'Motor', 'qty' => 5, 'tanggal_pesan' => 20210210],
            ['nama_pesanan'=>3, 'nama_pelanggan'=>'Joo','nama_barang' => 'Mobil', 'qty' => 6, 'tanggal_pesan' => 20210210],
            ['nama_pesanan'=>4, 'nama_pelanggan'=>'fitri','nama_barang' => 'iphone', 'qty' => 5, 'tanggal_pesan' => 20210210],
            ['nama_pesanan'=>5, 'nama_pelanggan'=>'Adzzurra','nama_barang' => 'macbook', 'qty' =>6, 'tanggal_pesan' => 20210210],
            ];

            DB::table('pesanan')->insert($pesanan);

    }
}
