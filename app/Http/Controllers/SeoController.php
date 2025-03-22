<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Seo;

class SeoController extends Controller
{
    public function index()
    {
        return view('seo.index');
    }
    public function create()
    {
        return view('seo.create');
    }

    public function store()
    {
        return view('seo.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try{

        $seo = new Seo();
        $seo->slug = $request->store_slug;
        $seo->page_link = 'http://coupen.test/store/'+$request->store_slug;
        $seo->page_name = $request->store_slug;
        $seo->seo_page_title = $request->seo_page_title;
        $seo->seo_meta_title = $request->seo_meta_title;
        $seo->seo_meta_description = $request->seo_meta_description;
        $seo->seo_meta_keyword = $request->seo_meta_keyword;
        $seo->seo_meta_canonical = $request->seo_meta_canonical;
        $seo->seo_meta_tags = $request->seo_meta_tags;
        $seo->seo_meta_index = $request->seo_meta_index;
        $seo->seo_head_script = $request->seo_head_script;
        $seo->seo_footer_script = $request->seo_footer_script;
        $seo->store_schema_code = $request->store_schema_code;
        $seo->save();
        DB::commit();
        return redirect()->route('stores.index')->with('success','Store Add Successfully');
    } catch (\Throwable $th) {
      DB::rollback();
      dd($th);
    }
    }
}
