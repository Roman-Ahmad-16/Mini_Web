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

        // 🟩 File Uploads
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/admin/uploads/setting/logo/', $filename);
            $setting->logo = 'assets/admin/uploads/setting/logo/' . $filename;
        }

        if ($request->hasFile('footer_logo')) {
            $file = $request->file('footer_logo');
            $filename = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/admin/uploads/setting/footer_logo/', $filename);
            $setting->footer_logo = 'assets/admin/uploads/setting/footer_logo/' . $filename;
        }

        if ($request->hasFile('fav_icon')) {
            $file = $request->file('fav_icon');
            $filename = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/admin/uploads/setting/fav_icon/', $filename);
            $setting->fav_icon = 'assets/admin/uploads/setting/fav_icon/' . $filename;
        }

        if ($request->hasFile('home_beadcrum_img')) {
            $file = $request->file('home_beadcrum_img');
            $filename = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/admin/uploads/setting/home_beadcrum_img/', $filename);
            $setting->home_beadcrum_img = 'assets/admin/uploads/setting/home_beadcrum_img/' . $filename;
        }

        if ($request->hasFile('setting_profile')) {
            $file = $request->file('setting_profile');
            $filename = time() . rand() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/admin/uploads/setting/profile/', $filename);
            $setting->setting_profile = 'assets/admin/uploads/setting/profile/' . $filename;
        }

        $setting->fill($request->except([
            'logo',
            'footer_logo',
            'fav_icon',
            'home_beadcrum_img',
            'setting_profile'
        ]));

        $setting->save();

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }

}
