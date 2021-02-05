<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranscriptMahasiswaController extends Controller
{
    public function index(){
        $user = auth()->user();
        $mahasiswa = $user->mahasiswa;
        $matakuliah = $mahasiswa->matakuliah;
        return view('mahasiswa/transkrip', ['user' => $user, 'mahasiswa' => $mahasiswa, 'matakuliah' => $matakuliah]);

    }
}
