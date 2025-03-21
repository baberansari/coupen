<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
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
    
    public function store(Request $request)
    {
        $store =   Store::with('faqs')->where('store_slug',$request->slug)->first();
            if(empty($store))
            {
                return redirect()->back()->with('error','no store available');
            }
        if($request->ajax())
        {
            $search = $request->input('type', '');
         
            $query = Offer::where('store_id',$store->id);
            if($search =='code' || $search == 'deal'){
                $query =  $query->where('offer_type',$search);
            }

            $data = $query->orderBy('id','desc')->paginate(10);
            return response()->json([
                'data' => $data->items(),
                'links' => $data->links()->toHtml(),
                'next_page_url' => $data->nextPageUrl(),
                'prev_page_url' => $data->previousPageUrl(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
            ]);

        }
        $slug = $request->slug;
        return view('store.list',compact('store','slug'));
    }
}
