<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(Request $request)
    {

        $category  = Category::where('slug',$request->slug)->first();
        $stores =  Store::where('category_id', $category->id)->get();
        return view('category.storelist',compact('category','stores'));
    }
    public function categories(Request $request)
    {
        $categories  = Category::all();
        return view('category.categories',compact('categories'));
    }
}
