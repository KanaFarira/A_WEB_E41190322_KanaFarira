<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DetailProfileSeeder extends Seeder
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
            'no_tlp' => '085854001419',
            'ttl' => '2001-07-13',
            'foto' => 'profil.jpg'
        ]);
    }
}
