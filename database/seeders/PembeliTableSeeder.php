<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama_pembeli'=>'xCoeg', 'nama_konsumen'=>'dia','jk' => 'Pria', 'kota' => 'Bandung', 'kode_post' => 666 , 'tgl_lahir' => 20210210],
            ['nama_pembeli'=>'Rimen', 'nama_konsumen'=>'she','jk' => 'Pria', 'kota' => 'Bandung', 'kode_post' => 666 , 'tgl_lahir' => 20210210],
            ['nama_pembeli'=>'Adya', 'nama_konsumen'=>'he','jk' => 'Wanita', 'kota' => 'Bandung', 'kode_post' => 666 , 'tgl_lahir' => 20210210],
            ['nama_pembeli'=>'Fitri', 'nama_konsumen'=>'him','jk' => 'Wanita', 'kota' => 'Bandung', 'kode_post' => 666 , 'tgl_lahir' => 20210210],
            ['nama_pembeli'=>'Jooo', 'nama_konsumen'=>'her','jk' => 'Pria', 'kota' => 'Bandung', 'kode_post' => 666 , 'tgl_lahir' => 20210210],
            ];

            DB::table('Pembeli')->insert($pembeli);
    }
}
