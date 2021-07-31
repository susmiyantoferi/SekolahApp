<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllCat()
    {
        $categories = Category::latest()->paginate(5);
        $trachCat = Category::onlyTrashed()->latest()->paginate(3);
        return view('admin.category.index', compact('categories', 'trachCat'));
    }


    public function AddCat(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required', 'unique:categories', 'max:255',

        ], [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category Less Then 255 Chars',

        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        //Cara Lebih Profesional ORM
        // $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->user_id = Auth::user()->id;
        // $category->save();

        return Redirect()->back()->with('succsess', 'Category Inserted Successfull');
    }

    public function Edit($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }

    public function Update(Request $request, $id)
    {
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id
        ]);
        return Redirect()->route('all.category')->with('succsess', 'Category Updated Successfull');
    }

    public function SoftDelete($id)
    {
        $delete = Category::find($id)->delete();
        return Redirect()->back()->with('succsess', 'Category Soft Delete Successfull');
    }

    public function Restore($id)
    {
        $delete = Category::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('succsess', 'Category Restore Successfull');
    }

    public function Pdelete($id)
    {
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('succsess', 'Category Permanent Deleted Successfull');
    }
}
