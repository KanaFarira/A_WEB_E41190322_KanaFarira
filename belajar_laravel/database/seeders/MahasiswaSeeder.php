<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'nama' => 'Kana Farira',
            'alamat' => 'Jember',
            'prodi' => 3,
            'no_hp' => '085854001419',
            
        ]);
    }
}
