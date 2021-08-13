<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function HomeAbout()
    {
        $homeAbout = HomeAbout::latest()->get();
        return view('admin.about.index', compact('homeAbout'));
    }

    public function AddAbout()
    {
        return view('admin.about.create');
    }

    public function StoreAbout(Request $request)
    {
        HomeAbout::insert([
            'title' => $request->title,
            'short_discrp' => $request->short_discrp,
            'long_discrp' => $request->long_discrp,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('succsess', 'About Inserted Successfull');
    }
}
