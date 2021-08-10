<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function HomeSlider()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider(){

        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:sliders',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',

        ], [
            'title.required' => 'Please Input Slider Title',
            'description.required' => 'Please Input Slider Description',
            'image.min' => 'Brand Longer Then 5 Characters',

        ]);

        $slider_image = $request->file('image');

        // insert menggunakan image Intervention
        $name_gen = hexdec(uniqid()) . '.' . $slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920, 1088)->save('image/slider/' . $name_gen);

        $last_img = 'image/slider/' . $name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.slider')->with('succsess', 'Slider Inserted Successfull');
    }
}