<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $jurusan = \App\Models\Jurusan::where('nama_jurusan', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $jurusan = \App\Models\Jurusan::all();
        }
        return view('admin/jurusan/index', ['jurusan' => $jurusan]);
    }

    public function create(Request $request)
    {
        \App\Models\Jurusan::create($request->all());
        return redirect('/jurusan')->with('sukses', 'Data berhasil di tambahkan!!');
    }

    public function edit($id)
    {
        $jurusan = \App\Models\Jurusan::find($id);
        return view('admin/jurusan/edit', ['jurusan' => $jurusan]);
    }

    public function update(Request $request, $id)
    {
        $jurusan = \App\Models\Jurusan::find($id);
        $jurusan->update($request->all());
        return redirect('/jurusan')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $jurusan = \App\Models\Mahasiswa::find($id);
        $jurusan->delete($jurusan);
        return redirect('/jurusan')->with('sukses', 'Data berhasil di hapus');
    }
}
