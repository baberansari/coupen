<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function index(Request $request){

        $offers =  Offer::with('store');

        if($request->store_id)
        {
            $offers =  $offers->where('store_id',$request->store_id);
        }
        $offers =   $offers->get();
        return  view('offer.index',compact('offers'));
    }
    public function create()
    {
        $stores =  Store::all();
        return view('offer.create',compact('stores'));
    }
    public function store(Request $request)
    {
     
        DB::beginTransaction();
        try {
            // Validate request data
            $validated = $request->validate([
                'store_id' => 'required|exists:stores,id',
                'offer_type' => 'required|in:deal,code',
                'offer_working' => 'nullable|in:yes,no',
                'offer_online' => 'required|in:online,in-store',
                'offer_expiry_date' => 'nullable|date',
                'offer_title' => 'required|string|max:255',
                'offer_description' => 'required|string',
                'offer_trem_condition' => 'required|string',
                'offer_code' => 'nullable|string|max:255',
                'offer_affiliate_url' => 'nullable|string|url',
                'offer_free_shipping' => 'boolean',
                'offer_gift' => 'boolean',
                'offer_discount_tittle' => 'nullable|string|max:255',
                'offer_discount_number' => 'nullable|string|max:255',
                'offer_verified' => 'boolean',
                'offer_exclusive' => 'boolean',
                'offer_home_page_visibility' => 'boolean',
                'offer_home_page_category' => 'boolean',
                'offer_home_page_featured_offer' => 'boolean',
            ]);
    
            // Manually assign values to the Offer model
            $offer = new Offer();
            $offer->store_id = $request->store_id;
            $offer->offer_type = $request->offer_type;
            $offer->offer_working = $request->offer_working;
            $offer->offer_online = $request->offer_online;
            $offer->offer_expiry_date = $request->offer_expiry_date;
            $offer->offer_title = $request->offer_title;
            $offer->offer_description = $request->offer_description;
            $offer->offer_trem_condition = $request->offer_trem_condition;
            $offer->offer_code = $request->offer_code;
            $offer->offer_affiliate_url = $request->offer_affiliate_url;
            $offer->offer_free_shipping = $request->offer_free_shipping;
            $offer->offer_gift = $request->offer_gift;
            $offer->offer_discount_tittle = $request->offer_discount_tittle;
            $offer->offer_discount_number = $request->offer_discount_number;
            $offer->offer_verified = $request->offer_verified;
            $offer->offer_exclusive = $request->offer_exclusive;
            $offer->offer_home_page_visibility = $request->offer_home_page_visibility;
            $offer->offer_home_page_category = $request->offer_home_page_category;
            $offer->offer_home_page_featured_offer = $request->offer_home_page_featured_offer;
            $offer->created_by =auth()->user()->name;
            // Save the offer
            $offer->save();
    
            DB::commit();
          
            return redirect()->route('offer.index')->with('success', 'Offer Added Successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }

    public function destroy($id)
    {
       $offer =  Offer::find($id);
       $offer->delete();
       return redirect()->route('offer.index')->with('success', 'Offer Deleted Successfully');
    }
    
    
}
