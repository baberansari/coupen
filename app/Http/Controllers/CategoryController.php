<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {

        DB::beginTransaction();
        try {

        $category =  new Category;
        $category->name =   $request->category_name;
        $category->description = $request->category_description;
        $path =  uploadImage($request->category_icon, 'category');
        $category->image =  $path;
        $category->icon =  $path;
        $category->created_by =auth()->user()->name;
        $category->save();
        DB::commit();
        return redirect()->route('category.index');
        } catch (\Throwable $th) {
           DB::rollback();
           dd($th);
        }

    }
    public function edit($id)
    {
        $categories =  Category::find($id);
        return view('category.edit',compact('categories'));
    }

    public function update(Request $request,$id)
    {
        DB::beginTransaction();
        try {

        $category =   Category::find($id);
        $category->name =   $request->category_name;
        $category->description = $request->category_description;
        if($request->hasFile('category_icon'))
        {

            $path =  uploadImage($request->category_icon, 'category');
            $category->image =  $path;
            $category->icon =  $path;
        }
        $category->created_by =auth()->user()->name;
        $category->save();
        DB::commit();
        return redirect()->route('category.index');
        } catch (\Throwable $th) {
           DB::rollback();
           dd($th);
        }
    }

    public function destroy($id)
    {
        $category =  Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'category Deleted Successfully');
    }
}
