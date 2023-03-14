<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            ['nama' => 'Gatot Joelianto',
             'jenis_kelamin' => 'laki-laki',
             'hubungan' => 'ayah',
            'tanggal_lahir' => '1970-01-06'],
             ['nama' => 'Mariana Ulfah Hoesny',
             'jenis_kelamin' => 'perempuan',
             'hubungan' => 'ibu',
             'tanggal_lahir' => '1979-10-09'],
             ['nama' => 'Alfarizi Abdullah',
             'jenis_kelamin' => 'laki-laki',
             'hubungan' => 'anak',
             'tanggal_lahir' => '2002-10-15'],
             ['nama' => 'Farrel Aulia',
             'jenis_kelamin' => 'laki-laki',
             'hubungan' => 'anak',
             'tanggal_lahir' => '2008-10-07']
        ]);
    }
}
