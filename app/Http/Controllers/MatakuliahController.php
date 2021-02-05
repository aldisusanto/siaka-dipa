<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $matakuliah = \App\Models\Matakuliah::where('nama_matakuliah', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $matakuliah = \App\Models\Matakuliah::all();
        }
        return view('admin/matakuliah/index', ['matakuliah' => $matakuliah]);
    }

    public function create(Request $request)
    {
        \App\Models\Matakuliah::create($request->all());
        return redirect('/matakuliah')->with('sukses', 'Data berhasil di tambahkan!!');
    }

    public function edit($id)
    {
        $matakuliah = \App\Models\Matakuliah::find($id);
        return view('admin/matakuliah/edit', ['matakuliah' => $matakuliah]);
    }

    public function update(Request $request, $id)
    {
        $matakuliah = \App\Models\Matakuliah::find($id);
        $matakuliah->update($request->all());
        return redirect('/matakuliah')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {

        $matakuliah = \App\Models\Matakuliah::find($id);
        $matakuliah->delete($matakuliah);
        return redirect('/matakuliah')->with('sukses', 'Data berhasil di hapus');
    }
}
