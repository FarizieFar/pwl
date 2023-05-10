<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            ['nim' => '2141720152',
            'nama' => 'Mohammad Farizi',
            'jk' => 'laki-laki',
            'tempat_lahir' => 'Malang',
            'tanggal_lahir' => '15 Desember 2002',
            'alamat' => 'Perum Dau Residence',
            'hp' => '082117700355',
            'kelas_id' => 'TI-2A']
        ]);
    }
}
