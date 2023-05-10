<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';//eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primarykey = 'nim';//memanggil isi DB dengan primary key
    //protected $keytype = 'int';
    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
    ];

    public function kelas(){
        return $this -> belongsTo(Kelas::class);
    }
}
