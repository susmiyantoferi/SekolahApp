<?php

namespace App\Http\Controllers;

use App\Models\TasywidulContact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasywidulContactController extends Controller
{
    //Admin Pendidikan
    public function adminTasywidul()
    {
        $tasywidul = TasywidulContact::all();
        return view('admin.pendidikan.tasywidul.index', compact('tasywidul'));
    }

    public function createData(){
        return view('admin.pendidikan.tasywidul.create');
    }

    public function AddData(Request $request ){
        TasywidulContact::insert([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.tasywidul')->with('succsess', 'Data Inserted Successfull');
    }

    public function EditData($id)
    {
        $tasywidul = TasywidulContact::find($id);
        return view('admin.pendidikan.tasywidul.edit', compact('tasywidul'));
    }

    public function UpdateData(Request $request, $id){
        TasywidulContact::find($id)->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.tasywidul')->with('succsess', 'Data Updated Successfull');
    }

    public function DeleteData($id){
        TasywidulContact::find($id)->delete();
        return Redirect()->route('admin.tasywidul')->with('succsess', 'Data Deleted Successfull');
    }



    //Home Pendidikan
    public function HomeTasywidul(){
        $data = DB::table('tasywidul_contacts')->first();
        return view('pages.pendidikan.tasywidul', compact('data'));
    }

}
