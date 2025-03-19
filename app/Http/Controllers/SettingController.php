<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {

            $sett = new Setting();
            $sett->settings_site_title = $request->settings_site_title;
            $sett->settings_top_bar = $request->settings_top_bar;
            $sett->settings_top_bar_link = $request->settings_top_bar_link;
            if ($request->hasfile('settings_logo')) {
                $path =  uploadImage($request->settings_logo, 'company');
                $sett->settings_logo =$path;
            }
            if ($request->hasfile('settings_footer_logo')) {
                $path =  uploadImage($request->settings_footer_logo, 'company');
                $sett->settings_footer_logo = $path;
            }
            if ($request->hasfile('settings_favicon')) {
                $path =  uploadImage($request->settings_favicon, 'company');
                $sett->settings_favicon =$path;
            }
            $sett->settings_email = $request->settings_email;
            $sett->settings_email_to = $request->settings_email_to;
            $sett->settings_email_from = $request->settings_email_from;
            $sett->settings_phone = $request->settings_phone;
            $sett->settings_address = $request->settings_address;
            $sett->settings_head_script = $request->settings_head_script;
            $sett->settings_popup_content = $request->settings_popup_content;
            $sett->save();
            DB::commit();
            return redirect()->route('home');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
