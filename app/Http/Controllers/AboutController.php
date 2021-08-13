<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function HomeAbout()
    {
        $homeAbout = HomeAbout::latest()->get();
        return view('admin.about.index', compact('homeAbout'));
    }
}
