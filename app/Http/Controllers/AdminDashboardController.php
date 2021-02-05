<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $jurusan = \App\Models\Jurusan::all();
        $matakuliah = \App\Models\Matakuliah::all();
        $mahasiswa = \App\Models\Mahasiswa::all();
        $dosen = \App\Models\Dosen::all();
        return view('admin/home', [
            'jurusan' => $jurusan,
            'matakuliah' => $matakuliah,
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen]);
    }
}
