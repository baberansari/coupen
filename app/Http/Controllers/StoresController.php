<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use App\Models\Seo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores =  Store::all();
        return view('store.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =  Category::all();
        return view('store.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'category_id' => 'required|integer|exists:categories,id',
        //     'store_sort_number' => 'nullable|integer',
        //     'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'store_featured_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'store_logo_alt_attribute' => 'required|string|max:255',
        //     'store_name' => 'required|string|max:255',
        //     'store_url' => 'required|url',
        //     'store_slug' => 'required|string|unique:stores,store_slug|max:255',
        //     'store_affiliate_url' => 'nullable|url',
        //     'store_description' => 'required|string',
        //     'store_rating' => 'nullable|numeric|min:0|max:5',
        //     'store_how_to_use' => 'nullable|string',
        //     'store_how_to_use_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'store_buyer_guide' => 'nullable|string',
        //     'store_buyers_guide_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'store_heading' => 'nullable|string|max:255',
        //     'store_sidebar_heading' => 'nullable|string|max:255',
        //     'store_sidebar_content' => 'nullable|string',
        //     'store_content' => 'nullable|string',
        //     'store_video_embedded_tittle' => 'nullable|string|max:255',
        //     'store_video_embedded_code' => 'nullable|string',
        //     'store_instagram_url' => 'nullable|url',
        //     'store_facebook_url' => 'nullable|url',
        // ]);
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|integer|exists:categories,id',
            // 'store_sort_number' => 'nullable|integer',
            'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'store_featured_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'store_logo_alt_attribute' => 'required|string|max:255',
            'store_name' => 'required|string|max:255',
            // 'store_url' => 'required',
            'store_affiliate_url' => 'nullable|url',
            'store_slug' => 'required|string|unique:stores,store_slug|max:255',
            'store_heading' => 'nullable|string|max:255',


        ]);

        if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::beginTransaction();
        try {
        $store = new Store();
        $store->category_id = $request->category_id;
        $store->store_sort_number = $request->store_sort_number;
        if($request->hasFile('store_logo'))
        {    $path =  uploadImage($request->store_logo, 'store_logo');
            $store->store_logo = $path ;
        }
        if($request->hasFile('store_featured_img'))
        {
            $path =  uploadImage($request->store_featured_img, 'store_featured_img');
        $store->store_featured_img =$path ;
        }

        $store->store_logo_alt_attribute = $request->store_logo_alt_attribute;
        $store->store_name = $request->store_name;
        $store->store_url = $request->store_url;
        $store->store_slug = $request->store_slug;
        $store->store_affiliate_url = $request->store_affiliate_url;
        $store->store_description = $request->store_description;
        $store->store_rating = $request->store_rating;
        $store->store_how_to_use = $request->store_how_to_use;
        if($request->hasFile('store_how_to_use_img'))
        {
            $path =  uploadImage($request->store_how_to_use_img, 'store_how_to_use_img');
            $store->store_how_to_use_img =  $path;
        }
        $store->store_buyer_guide = $request->store_buyer_guide;
        if($request->hasFile('store_buyers_guide_img'))
        {
            $path =  uploadImage($request->store_buyers_guide_img, 'store_buyers_guide_img');
             $store->store_buyers_guide_img = $path ;
        }
        $store->store_heading = $request->store_heading;
        $store->store_sidebar_heading = $request->store_sidebar_heading;
        $store->store_sidebar_content = $request->store_sidebar_content;
        $store->store_content = $request->store_content;
        $store->store_video_embedded_tittle = $request->store_video_embedded_tittle;
        $store->store_video_embedded_code = $request->store_video_embedded_code;
        $store->store_instagram_url = $request->store_instagram_url;
        $store->store_facebook_url = $request->store_facebook_url;
        $store->store_twitter_url = $request->store_twitter_url;
        $store->store_google_plus_url = $request->store_google_plus_url;
        $store->store_youtube_url = $request->store_youtube_url;
        $store->store_pinterest_url = $request->store_pinterest_url;
        $store->store_linkedin_url = $request->store_linkedin_url;
        $store->seo_page_title = $request->seo_page_title;
        $store->seo_meta_title = $request->seo_meta_title;
        $store->seo_meta_description = $request->seo_meta_description;
        $store->seo_meta_keyword = $request->seo_meta_keyword;
        $store->seo_meta_canonical = $request->seo_meta_canonical;
        $store->seo_meta_tags = $request->seo_meta_tags;
        $store->seo_meta_index = $request->seo_meta_index;
        $store->seo_head_script = $request->seo_head_script;
        $store->seo_footer_script = $request->seo_footer_script;
        $store->store_schema_code = $request->store_schema_code;
        $store->created_by =auth()->user()->name;
        $store->save();

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
