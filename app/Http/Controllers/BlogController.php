<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs =  Blog::all();
        return  view('blog.index',compact('blogs'));  
    }

    public function create(Request $request)
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
           
            $offer = new Blog();
            $offer->title = $request->title;
            $offer->description = $request->description;
            if($request->hasFile('image'))
            {
                $path =  uploadImage($request->image, 'blog');
                $offer->image = $path ;
              
            }
            $offer->created_by =auth()->user()->name;
            $offer->save();
            DB::commit();

            return redirect()->route('blogs.index')->with('success', 'Blog Added Successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }

    public function destroy($id)
    {
       $offer =  Blog::find($id);
       $offer->delete();
       return redirect()->route('blogs.index')->with('success', 'faqs Deleted Successfully');
    }

    public function edit($id)
    {
        $faq = Blog::find($id);
        return view('blog.edit',compact('faq'));
    }

    public function update(Request $request,$id)
    {

        DB::beginTransaction();
        try {
            // Manually assign values to the Offer model
            $offer =Blog::find($id);
            $offer->title = $request->title;
            $offer->description = $request->description;
            if($request->hasFile('image'))
            {
                $path =  uploadImage($request->image, 'blog');
                $offer->image = $path ;
              
            }
            $offer->created_by =auth()->user()->name;
            $offer->save();
            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'faqs Update Successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }

    public function list()
    {
        $blogs = Blog::paginate(10); // 10 blogs per page
        return view('blog', compact('blogs'));
    }
}
