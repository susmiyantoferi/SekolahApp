<?php

namespace App\Http\Controllers;

use niklasravnsborg\LaravelPdf\Facades\Pdf;
use App\Models\Orangtua;
use App\Models\Santri;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function Daftar()
    {
        $data = Santri::latest()->simplePaginate(5);
        return view('pages.pendaftaran.daftar', compact('data'));
    }

    public function addSantri(){
        return view('pages.pendaftaran.santri.add_santri');
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

        //insert table santris
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
            'message' => 'Data Santri Berhasil Dimasukan',
            'alert-type' => 'success',
        );

        // return redirect()->route('daftar')->with($notification);
        return view('pages.pendaftaran.orangtua.add_orangtua')->with($notification);
    }

    public function AddOrangtua(){
        return view('pages.pendaftaran.orangtua.add_orangtua');
    }

    public function StoreOrangtua(Request $request){
        $validateData = $request->validate([
            'no_kk' => 'required|unique:orangtuas',
            'nik_ayh' => 'required|unique:orangtuas',
            'nama_ayh' => 'required',
            'agama_ayh' => 'required',
            'pend_ayh' => 'required',
            'kerja_ayh' => 'required',
            'gaji_ayh' => 'required',
            'status_ayh' => 'required',
            'nik_ibu' => 'required|unique:orangtuas',
            'nama_ibu' => 'required',
            'agama_ibu' => 'required',
            'pend_ibu' => 'required',
            'kerja_ibu' => 'required',
            'gaji_ibu' => 'required',
            'status_ibu' => 'required',
            'hp' => 'required',
        ]);

        //insert table orangtuas
        $data = new Orangtua();
        $data->no_kk = $request->no_kk;
        $data->nik_ayh = $request->nik_ayh;
        $data->nama_ayh = $request->nama_ayh;
        $data->agama_ayh = $request->agama_ayh;
        $data->pend_ayh = $request->pend_ayh;
        $data->kerja_ayh = $request->kerja_ayh;
        $data->gaji_ayh = $request->gaji_ayh;
        $data->status_ayh = $request->status_ayh;

        $data->nik_ibu = $request->nik_ibu;
        $data->nama_ibu = $request->nama_ibu;
        $data->agama_ibu = $request->agama_ibu;
        $data->pend_ibu = $request->pend_ibu;
        $data->kerja_ibu = $request->kerja_ibu;
        $data->gaji_ibu = $request->gaji_ibu;
        $data->status_ibu = $request->status_ibu;
        $data->hp = $request->hp;
        $data->save();

        $notification = array(
            'message' => 'Pendaftaran Berhasil, Klick Print Untuk Melihat Data!',
            'alert-type' => 'success',
        );

        return redirect()->route('daftar')->with($notification);
        
    }

    public function DaftarPrint($id){
        
        $data['details'] = Santri::with(['orangtua'])->where('id', $id)->first();
        $data['details'] = Orangtua::with(['santri'])->where('id', $id)->first();
        // dd($data);
        //return view('pages.pendaftaran.daftar_print', $data);
        $pdf = PDF::loadView('pages.pendaftaran.daftar_print', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('Data_Pendaftaran_Santri.pdf');
    }
}
