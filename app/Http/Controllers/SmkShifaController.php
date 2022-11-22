<?php

namespace App\Http\Controllers;

use App\Models\SmkShifa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SmkShifaController extends Controller
{
    //Admin
    public function adminSmkshifa(){
        $smk = SmkShifa::all();
        return view('admin.pendidikan.smkShifa.index', compact('smk'));
    }

    public function createSmkshifa(){
        return view('admin.pendidikan.smkShifa.create');
    }

    public function addSmkshifa(Request $request){
        SmkShifa::insert([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'created_at' => Carbon::now()
        ]); 

        return Redirect()->route('admin.smkshifa')->with('succsess', 'Data Inserted Successfull');
    }

    public function editSmkshifa($id){
        $smk = SmkShifa::find($id);
        return view('admin.pendidikan.smkShifa.edit', compact('smk'));
    }

    public function updateSmkshifa(Request $request, $id){
       SmkShifa::find($id)->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'updated_at' => Carbon::now()
       ]);

        return Redirect()->route('admin.smkshifa')->with('succsess', 'Data Updated Successfull');
    }

    public function deleteSmkshifa($id){
        SmkShifa::find($id)->delete();
        return Redirect()->route('admin.smkshifa')->with('succsess', 'Data Deleted Successfull');
    }


    //Home
    public function HomeSmkshifa(){
        $smk = DB::table('smk_shifas')->first();
        // $smk = SmkShifa::all()->first();
        return view('pages.pendidikan.smk_shifa', compact('smk'));
    }
}
