<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenListController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $mahasiswa = $user->mahasiswa;
        $dosen = \App\Models\Dosen::all();
        return view('mahasiswa/dosen', ['user' => $user, 'mahasiswa' => $mahasiswa, 'dosen' => $dosen]);
    }
}
