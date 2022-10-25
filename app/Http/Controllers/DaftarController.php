<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function Daftar()
    {
        $data['alldata'] = Santri::all();
        return view('pages.daftar', $data);
    }

    public function addSantri(){
        return view('pages.add_santri');
    }
}
