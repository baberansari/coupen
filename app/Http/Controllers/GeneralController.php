<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use App\Models\Store;
use App\Models\CoupenView;
use App\Models\CoupenUsed;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(Request $request)
    {
        $category  = Category::where('slug',$request->slug)->first();
        $stores =  Store::where('category_id', $category->id)->paginate(6);
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

            $query = Offer::with('store')
            ->where('store_id', $store->id)
            ->withCount([
                'offerused as total_coupons' => function ($query) {
                    $query->selectRaw('count(*)');
                },
                'offerused as used_coupons' => function ($query) {
                    $query->where('status', 1);
                }
            ]);

                // Apply filter if search is 'code' or 'deal'
                if ($search == 'code' || $search == 'deal') {
                    $query->where('offer_type', $search);
                }

                // Fetch paginated data
                $data = $query->orderBy('id', 'desc')->paginate(5);

                // Modify collection after fetching paginated data
                $data->getCollection()->transform(function ($offer) {
                    $total = $offer->total_coupons;
                    $used = $offer->used_coupons;
                    $offer->used_percentage = $total > 0 ? round(($used / $total) * 100, 2) : 0;
                    return $offer;
                });

                // Return JSON response
                return response()->json([
                    'data' => $data->items(),
                    'links' => $data->links()->toHtml(), // Keeps HTML pagination links
                    'next_page_url' => $data->nextPageUrl(),
                    'prev_page_url' => $data->previousPageUrl(),
                    'current_page' => $data->currentPage(),
                    'last_page' => $data->lastPage(),
                ]);


        }
        $slug = $request->slug;
        return view('store.list',compact('store','slug'));
    }

    public function getCode(Request $request)
    {
        $coupen = Offer::with('store')->find($request->id);
        CoupenView::updateOrCreate([
            'offer_id'=>$coupen->id,
            'ip'=>$request->userIp
        ]);
        return response()->json([
            'data' => $coupen,

        ]);
    }
    public function usage(Request  $request)
    {

        $coupen = Offer::find($request->id);
        $coupenUsed = CoupenUsed::where('offer_id', $coupen->id)
        ->orWhere('ip', $request->userIp)
        ->first();

            if ($coupenUsed) {
                // If a record is found, update only the 'status' field
                $coupenUsed->update(['status' => $request->switchValue]);
            } else {
                // If no record is found, create a new one
                CoupenUsed::create([
                    'offer_id' => $coupen->id,
                    'ip' => $request->userIp,
                    'status' => $request->switchValue
                ]);
            }

            return response()->json([
                'data' => [],

            ]);
    }

    public function coupen()
    {
        $offers =  Offer::paginate(10);
        return  view('coupen',compact('offers'));
    }
    public function allstore()
    {
        $stores =  Store::paginate(10);
        return  view('store',compact('stores'));
    }
}
