<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/campuspedia-siswa')->with('sukses','Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $siswa_update = \App\Siswa::find($id);
        return view('siswa/update',['siswa' => $siswa_update]);
    }

    public function update_data(Request $request, $id)
    {
        $siswa_update_data = \App\Siswa::find($id);
        $siswa_update_data->update($request->all());
        return redirect('/campuspedia-siswa')->with('sukses','Data Berhasil Diperbaharui');
    }

    public function delete($id)
    {
        $siswa_delete = \App\Siswa::find($id);
        $siswa_delete -> delete();
        return redirect('/campuspedia-siswa')->with('sukses','Data Berhasil Dihapus');
    }
}
