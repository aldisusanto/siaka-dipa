<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data_mahasiswa = Mahasiswa::where('nama_depan', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data_mahasiswa = Mahasiswa::all();
        }
        return view('admin/mahasiswa/index', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        $user = new \App\Models\User;
        $user->role = 'mahasiswa';
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->username);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil di tambahkan!!');


    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('admin/mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->update($request->all());
        if ($request->file('foto')) {
            $imageName = time() . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('image/', $imageName);
            $mahasiswa->foto = $imageName;
            $mahasiswa->save();
        }
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil di hapus');
    }

    public function profile($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $matakuliah = Matakuliah::all();
        $jadwal = Jadwal::all();
        $dosen = Dosen::all();
        return view('admin/mahasiswa/profile', ['mahasiswa' => $mahasiswa, 'matakuliah' => $matakuliah, 'dosen' => $dosen, 'jadwal' => $jadwal]);
    }

    public function nilai(Request $request, $id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        $mahasiswa->matakuliah()->attach($request->nama_matakuliah, ['nilai' => $request->nilai]);

        return redirect('mahasiswa/' . $id . '/profile')->with('sukses', 'Nilai berhasil di tambahkan!!');
    }

    public function jadwal(Request $request, $id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        $jadwal = new Jadwal();
        $jadwal->matakuliah_id = $request->nama_matakuliah;
        $jadwal->dosen_id = $request->dosen;
        $jadwal->kelas = $request->kelas;
        $jadwal->hari = $request->hari;
        $jadwal->jam = $request->jam;
        $jadwal->ruang = $request->ruang;
        $mahasiswa->jadwal()->save($jadwal);
        return redirect('mahasiswa/' . $id . '/profile')->with('sukses', 'Jadwal berhasil di tambahkan!!');


    }

}
