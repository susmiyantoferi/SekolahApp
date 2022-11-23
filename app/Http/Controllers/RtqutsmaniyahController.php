<?php

namespace App\Http\Controllers;

use App\Models\Rtqutsmaniayah;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RtqutsmaniyahController extends Controller
{
    //Admin
    public function adminRtqusman(){
       $rtq = Rtqutsmaniayah::all();
        return view('admin.pendidikan.rtqUtsmaniyah.index', compact('rtq'));
    }

    public function createRtqusman(){
        return view('admin.pendidikan.rtqUtsmaniyah.create');
    }

    public function addRtqusman(Request $request){
        Rtqutsmaniayah::insert([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.rtqusman')->with('succsess', 'Data Inserted Successfull');
    }

    public function editRtqusman($id){
        $rtq = Rtqutsmaniayah::find($id);
        return view('admin.pendidikan.rtqUtsmaniyah.edit', compact('rtq'));
    }

    public function updateRtqusman(Request $request, $id){
        Rtqutsmaniayah::find($id)->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.rtqusman')->with('succsess', 'Data Updated Successfull');
    }

    public function deleteRtqusman($id){
        Rtqutsmaniayah::find($id)->delete();
        return Redirect()->route('admin.rtqusman')->with('succsess', 'Data Deleted Successfull');
    }


    //Home
    public function HomeRtqusman(){
        //$rtq = DB::table('rtqutsmaniayahs')->first();
        $rtq = Rtqutsmaniayah::all()->first();
        return view('pages.pendidikan.rtq_usman', compact('rtq'));
    }
}
