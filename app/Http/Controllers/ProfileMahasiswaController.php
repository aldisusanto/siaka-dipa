<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileMahasiswaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $mahasiswa = $user->mahasiswa;
        $jurusan = $mahasiswa->jurusan;
        return view('mahasiswa/profile', ['user' => $user, 'mahasiswa' => $mahasiswa, 'jurusan' => $jurusan]);
    }
}
