<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Seo;

class SeoController extends Controller
{
    public function index()
    {
        $seos =  Seo::all();
        return view('seo.index',compact('seos'));
    }
    public function create()
    {
        return view('seo.create');
    }


    public function store(Request $request)
    {

        DB::beginTransaction();
        try{
        $seo = new Seo();
        $seo->slug = $request->seo_page_name;
        $seo->page_link = $request->seo_page_link;
        $seo->page_name = $request->seo_page_name;
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
        return redirect()->route('seo.index')->with('success','Seo Add Successfully');
    } catch (\Throwable $th) {
      DB::rollback();
      dd($th);
    }
    }
    public function edit($id)
    {
        $seo = Seo::find($id);
        return view('seo.edit',compact('seo'));
    }


    public function update(Request $request,$id)
    {

        DB::beginTransaction();
        try{
        $seo =  Seo::find($id);
        $seo->slug = $request->seo_page_name;
        $seo->page_link = $request->seo_page_link;
        $seo->page_name = $request->seo_page_name;
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
        return redirect()->route('seo.index')->with('success','Seo Updated Successfully');
    } catch (\Throwable $th) {
      DB::rollback();
      dd($th);
    }
    }
    public function show($id)
    {
        $offer =  Seo::find($id);
        $offer->delete();
        return redirect()->route('offer.index')->with('success', 'Seo  Deleted Successfully');
    }
    // public function destroy($id)
    // {

    // }
}
