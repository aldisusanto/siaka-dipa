<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalMahasiswaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $mahasiswa = $user->mahasiswa;
        $jurusan = $mahasiswa->jurusan;
        $matakuliah = $mahasiswa->matakuliah;
        $jadwal = $mahasiswa->jadwal;
        return view('mahasiswa/jadwal', ['user' => $user, 'mahasiswa' => $mahasiswa, 'jurusan' => $jurusan, 'matakuliah' => $matakuliah, 'jadwal' => $jadwal]);
    }
}
