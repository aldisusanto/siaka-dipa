<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data_dosen = \App\Models\Dosen::where('nama_depan', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data_dosen = \App\Models\Dosen::all();
        }
        return view('admin/dosen/index', ['data_dosen' => $data_dosen]);
    }

    public function create(Request $request)
    {
        $user = new \App\Models\User;
        $user->role = 'dosen';
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->username);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        \App\Models\Dosen::create($request->all());
        return redirect('/dosen')->with('sukses', 'Data berhasil di tambahkan!!');


    }

    public function edit($id)
    {
        $dosen = \App\Models\Dosen::find($id);
        return view('/admin/dosen/edit', ['dosen' => $dosen]);
    }

    public function update(Request $request, $id)
    {
        $dosen = \App\Models\Dosen::find($id);
        $dosen->update($request->all());
        return redirect('/dosen')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $dosen = \App\Models\Dosen::find($id);
        $dosen->delete($dosen);
        return redirect('/dosen');
    }

}
