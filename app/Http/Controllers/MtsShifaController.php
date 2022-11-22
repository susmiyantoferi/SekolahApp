<?php

namespace App\Http\Controllers;

use App\Models\MtsShifa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MtsShifaController extends Controller
{
    // Admin
    public function adminMtsshifa(){
       $mts =  MtsShifa::all();
       return view('admin.pendidikan.mtsShifa.index', compact('mts'));
    }

    public function createMtsshifa(){
        return view('admin.pendidikan.mtsShifa.create');
    }

    public function addMtsshifa(Request $request){
        MtsShifa::insert([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.mtsshifa')->with('succsess', 'Data Inserted Successfull');
    }

    public function editMtsshifa($id){
        $mts = MtsShifa::find($id);
        return view('admin.pendidikan.mtsShifa.edit', compact('mts'));
    }

    public function updateMtsshifa(Request $request, $id){
        MtsShifa::find($id)->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.mtsshifa')->with('succsess', 'Data Updated Successfull');
    }

    public function deleteMtsshifa($id){
        MtsShifa::find($id)->delete();
        return Redirect()->route('admin.mtsshifa')->with('succsess', 'Data Deleted Successfull');
    }


    //home
    public function HomeMtsshifa(){
        $mts = DB::table('mts_shifas')->first();
        return view('pages.pendidikan.mts_shifa', compact('mts'));
    }
}
