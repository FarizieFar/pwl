<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            ['nama_hobi' => 'Futsal',
             'kategori_hobi' => 'Olahraga',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Tennis Meja',
             'kategori_hobi' => 'Olahraga',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Renang',
             'kategori_hobi' => 'Olahraga',
             'durasi_hobi' => 'pendek']
        
    ]);
}
}