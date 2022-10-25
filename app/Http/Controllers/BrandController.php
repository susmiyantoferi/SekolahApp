<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
//use Image; 
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllBrand()
    {
        $brands = Brand::latest()->simplePaginate(5);
        return view('admin.brand.index', compact('brands'));
    }

    public function StoreBrand(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|min:5',
            'brand_image' => 'required|mimes:jpg,jpeg,png',

        ], [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_image.min' => 'Brand Longer Then 5 Characters',

        ]);

        $brand_image = $request->file('brand_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen . '.' . $img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location . $img_name;
        // $brand_image->move($up_location, $img_name);

        // insert menggunakan image Intervention
        $name_gen = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300, 200)->save('image/brand/' . $name_gen);

        $last_img = 'image/brand/' . $name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfull',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function Edit($id)
    {
        $brands = Brand::find($id);
        return view('admin.brand.edit', compact('brands'));
    }

    public function Update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'brand_name' => 'required|min:5',
            'brand_image' => 'mimes:jpg,jpeg,png',

        ], [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_image.min' => 'Brand Longer Then 5 Characters',

        ]);

        $old_image = $request->old_image;

        $brand_image = $request->file('brand_image');

        if ($brand_image) {

            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location . $img_name;
            $brand_image->move($up_location, $img_name);

            unlink($old_image);
            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $last_img,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Brand Image Update Successfull',
                'alert-type' => 'info'
            );

            return Redirect()->back()->with($notification);
        } else {

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Brand Name Update Successfull',
                'alert-type' => 'warning'
            );

            return Redirect()->back()->with($notification);
        }
    }

    public function Delete($id)
    {
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        $notification = array(
            'message' => 'Brand Deleted Successfull',
            'alert-type' => 'error'
        );

        Brand::find($id)->delete();
        return Redirect()->back()->with($notification);
    }


    //Multi Image All Method
    public function Multpic()
    {
        $images = Multipic::all();
        return view('admin.multipic.index', compact('images'));
    }

    public function StoreImg(Request $request)
    {
        $image = $request->file('image');

        foreach ($image as $multi_img) {

            // insert menggunakan image Intervention
            $name_gen = hexdec(uniqid()) . '.' . $multi_img->getClientOriginalExtension();
            Image::make($multi_img)->save('image/multi/' . $name_gen);

            $last_img = 'image/multi/' . $name_gen;

            Multipic::insert([
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        }

        return Redirect()->back()->with('succsess', 'Brand Inserted Successfull');
    }


    // Logout System
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login')->with('succsess', 'User Logout');
    }
}