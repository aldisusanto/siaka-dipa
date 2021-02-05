<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['jurusan_id', 'kode_matakuliah', 'nama_matakuliah', 'sks', 'wajib_opsi', 'semester'];
    use HasFactory;


    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matakuliah');
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

}

