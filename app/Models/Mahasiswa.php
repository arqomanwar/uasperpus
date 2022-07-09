<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;


    protected $table = "mahasiswas";
    protected $fillable = ['mahasiswa_id', 'user_id', 'nim', 'nama_mhs', 'fakultas_id',
   'prodi_id'];

    public function peminjaman(){
        return $this->hasMany(Post::class);
    }
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class);
    }

    protected function fakultas()
   {
        return $this->belongsTo(Fakultas::class, 'fakultas_id', 'id');
   }

   protected function prodi()
   {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
   }
}
