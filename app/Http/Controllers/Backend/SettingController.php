<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CategorySetting;
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
            if (isset($setting->website_logo)){
                unlink('uploads/logo/'.$setting->website_logo);
            }
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

    // Category Setting
    public function category()
    {
       return view('admin.setting.category-setting');
    }

    // Category Setting Store
    public function categoryStore(Request $request)
    {
        try {
            $category_setting = new CategorySetting();
            $category_setting->category_id = $request->category_id;
            $category_setting->save();
            return back()->with('message','Successfully Category Settting Added');

        } catch (\Throwable $th) {
            return back()->with('error','Something went wrong...!!');
        }
    }

    // Category Setting Update
    public function categoryUpdate(Request $request)
    {
        try {
            $category_setting = CategorySetting::findOrFail($request->category_setting_id);
            $category_setting->category_id = $request->category_id;
            $category_setting->update();
            return back()->with('message','Successfully Category Setting Updated');
        } catch (\Throwable $th){
            return back()->with('error','Something went wrong....!!');
        }
    }
    // Category Setting Destroy
    public function categoryDestroy(Request $request)
    {
        try {
            $category_setting = CategorySetting::findOrFail($request->category_setting_id);
            $category_setting->delete();
            return back()->with('message','Successfully Category Setting Deleted!!');
        }catch (\Throwable $th){
            return back()->with('error','Something went wrong....!!');
        }
    }
}

