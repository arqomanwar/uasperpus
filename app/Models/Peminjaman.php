<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjamen";
    protected $fillable = ['peminjamen_id', 'kode_peminjaman', 'mahasiswa_id', 'buku_id', 'tgl_pinjam',
   'tgl_kembali', 'status'];

   protected function mahasiswa()
   {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
   }

   protected function buku()
   {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
   }
}
