<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();
        return view("admin.setting.edit", compact("setting"));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'address' => 'required|string',
            'phone_no' => 'required|string|max:50',
            'phone_no_2' => 'nullable|string|max:50',
            'whatsapp_no' => 'nullable|string|max:50',
            'setting_profile' => 'nullable|mimes:pdf|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'footer_logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'fav_icon' => 'nullable|image|mimes:jpg,jpeg,png,ico|max:1024',
            'home_beadcrum_img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:8192',
        ]);

        $setting = Setting::first();

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $logo = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/setting/logo/', $logo);
            $setting->logo = 'assets/admin/uploads/setting/logo/' . $logo;
        }

        if ($request->hasFile('setting_profile')) {

            $file = $request->file('setting_profile');
            $extension = $file->getClientOriginalExtension();
            $setting_profile = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/setting/profile/', $setting_profile);
            $setting->setting_profile = 'assets/admin/uploads/setting/profile/' . $setting_profile;
        }

        if ($request->hasFile('home_beadcrum_img')) {

            $file = $request->file('home_beadcrum_img');
            $extension = $file->getClientOriginalExtension();
            $home_beadcrum_img = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/setting/home_beadcrum_img/', $home_beadcrum_img);
            $setting->home_beadcrum_img = 'assets/admin/uploads/setting/home_beadcrum_img/' . $home_beadcrum_img;
        }

        if ($request->hasFile('footer_logo')) {

            $file = $request->file('footer_logo');
            $extension = $file->getClientOriginalExtension();
            $footer_logo = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/setting/footer_logo/', $footer_logo);
            $setting->footer_logo = 'assets/admin/uploads/setting/footer_logo/' . $footer_logo;
        }

        if ($request->hasFile('fav_icon')) {

            $file = $request->file('fav_icon');
            $extension = $file->getClientOriginalExtension();
            $fav_icon = time() . rand() . '.' . $extension;
            $file->move('assets/admin/uploads/setting/fav_icon/', $fav_icon);
            $setting->fav_icon = 'assets/admin/uploads/setting/fav_icon/' . $fav_icon;
        }

        $setting->phone_no = $request->phone_no;
        $setting->phone_no_2 = $request->phone_no_2;
        $setting->whatsapp_no = $request->whatsapp_no;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->fb_link = $request->fb_link;
        $setting->insta_link = $request->insta_link;
        $setting->yt_link = $request->yt_link;
        $setting->whatsapp_link = $request->whatsapp_link;
        $setting->tiktok_link = $request->tiktok_link;

        $setting->save();

        $notification = array(
            'message' => 'Settings Upldated Successfully!',
            'alert' => 'success',
        );

        return redirect()->back()->with('notification', $notification);
    }
}
