<?php

namespace App\Http\Controllers;

use App\Models\Diniyah;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DiniyahController extends Controller
{
    //Admin
    public function AdminDiniyah(){
        $diniyah = Diniyah::all();
        return view('admin.pendidikan.diniyah.index', compact('diniyah'));
    }

    public function CreateDiniyah(){
        return view('admin.pendidikan.diniyah.create');
    }

    public function AddDiniyah(Request $request){
        Diniyah::insert([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.diniyah')->with('succsess', 'Data Inserted Successfull');
    }

    public function EditDiniyah($id){
        $diniyah = Diniyah::find($id);
        return view('admin.pendidikan.diniyah.edit', compact('diniyah'));
    }

    public function UpdateDiniyah(Request $request, $id){
        Diniyah::find($id)->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.diniyah')->with('succsess', 'Data Updated Successfull');
    }

    public function DeleteDiniyah($id){
        Diniyah::find($id)->delete();
        return Redirect()->route('admin.diniyah')->with('succsess', 'Data Deleted Successfull');
    }


    //Home
    public function HomeDiniyah(){
        $diniyah = Diniyah::all()->first();
        return view('pages.pendidikan.diniyah', compact('diniyah'));
    }
}
