<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function Daftar()
    {
        $data = Santri::latest()->simplePaginate(5);
        return view('pages.daftar', compact('data'));
    }

    public function addSantri(){
        return view('pages.add_santri');
    }

    public function StoreSantri(Request $request){
        $validateData = $request->validate([
            'nik' => 'required|unique:santris',
            'nisn' => 'required|unique:santris',
            'nama' => 'required',
            'kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'tinggal' => 'required',
            'bahasa' => 'required',
        ], [
            'nik.required' => 'Masukan NIK',
            'nik.unique' => 'NIK Tidak Boleh Sama',
            'nisn.required' => 'Masukan NISN',
            'nisn.unique' => 'NISN Tidak Boleh Sama',

        ]);

        $data = new Santri();
        $data->nik = $request->nik;
        $data->nisn = $request->nisn;
        $data->nama = $request->nama;
        $data->kelamin = $request->kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->tinggal = $request->tinggal;
        $data->bahasa = $request->bahasa;
        $data->save();

        $notification = array(
            'message' => 'Pendaftaran Berhasil',
            'alert-type' => 'success',
        );

        return redirect()->route('daftar')->with($notification);
    }
}
