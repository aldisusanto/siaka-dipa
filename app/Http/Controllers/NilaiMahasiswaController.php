<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $mahasiswa = $user->mahasiswa;
        $matakuliah = $mahasiswa->matakuliah;
        return view('mahasiswa/nilai', ['user' => $user, 'mahasiswa' => $mahasiswa, 'matakuliah' => $matakuliah]);
    }
}
