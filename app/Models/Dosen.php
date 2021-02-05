<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'gelar', 'alamat', 'no_hp', 'user_id'];
    use HasFactory;

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
