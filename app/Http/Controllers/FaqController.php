<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index(Request $request){

        $faq =  Faq::with('store');

        if($request->store_id)
        {
            $faq =  $faq->where('store_id',$request->store_id);
        }
        $store_id =$request->store_id;
        $faqs =   $faq->get();
        return  view('faqs.index',compact('faqs','store_id'));
    }
    public function create(Request $request)
    {
        $store_id =  $request->store_id;
        if(empty($store_id))
        {
            return redirect()->route('faqs.index');
        }
        $stores =  Store::all();
        return view('faqs.create',compact('stores','store_id'));
    }
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            // Validate request data
            $validated = $request->validate([
                'store_id' => 'required|exists:stores,id',

            ]);

            // Manually assign values to the Offer model
            $offer = new Faq();
            $offer->store_id = $request->store_id;
            $offer->question = $request->faq_question;
            $offer->answer = $request->faq_answer;
            $offer->created_by =auth()->user()->name;
            // Save the offer
            $offer->save();

            DB::commit();

            return redirect()->route('faqs.index',['store_id'=>$request->store_id])->with('success', 'faqs Added Successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }

    public function destroy($id)
    {
       $offer =  Faq::find($id);
       $offer->delete();
       return redirect()->route('faqs.index')->with('success', 'faqs Deleted Successfully');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $stores =  Store::all();
        $faq = Faq::find($id);
        return view('faqs.edit',compact('faq','stores'));
    }

    public function update(Request $request,$id)
    {

        DB::beginTransaction();
        try {
            // Validate request data
            $validated = $request->validate([
                'store_id' => 'required|exists:stores,id',

            ]);

            // Manually assign values to the Offer model
            $offer =  Faq::find($id);
            $offer->store_id = $request->store_id;
            $offer->question = $request->question;
            $offer->answer = $request->answer;
            $offer->created_by =auth()->user()->name;
            // Save the offer
            $offer->save();

            DB::commit();

            return redirect()->route('faqs.index')->with('success', 'faqs Update Successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }

}
