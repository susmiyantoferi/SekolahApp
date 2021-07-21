<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function AllCat()
    {
        $categories = Category::latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
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
}
