<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public  function index()
    {
        $allSetting = Setting::findOrFail(1);
        return view('admin.setting.list',compact('allSetting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::findOrFail(1);
        $setting->website_title = $request->website_title;
        if ($request->hasFile('website_logo')) {
            $image = $request->file('website_logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/logo/');
            $image->move($destinationPath, $name);
            $setting->website_logo = $name;
        }
        $setting->address = $request->address;
        $setting->phone_number = $request->phone_number;
        $setting->email_address = $request->email_address;
        $setting->facebook_link = $request->facebook_link;
        $setting->youtube_link = $request->youtube_link;
        $setting->twitter_link = $request->twitter_link;
        $setting-> linked_link = $request->linked_link;
        $setting->copywrite_text = $request->copywrite_text;
        $setting->update();
        return back()->with('message','Successfully Settings Update');
    }

}

