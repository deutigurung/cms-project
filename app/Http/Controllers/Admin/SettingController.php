<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::find(1);
        return view('backend.settings.site',compact('setting'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'site_title' => 'required|string',
            'site_desc' => 'nullable|string',
            'site_url' => 'required|string',
            'site_status' => 'required',
            'site_keywords' => 'nullable|string',
        ]);

        $setting = Setting::find(1);
        $setting->update([
            'site_title'      => $request->get('site_title') ,
            'site_url'      => $request->get('site_url'),
            'site_desc'      => $request->get('site_desc'),
            'site_keywords'      => $request->get('site_keywords'),
            'site_status'      => $request->get('site_status'),
        ]);
        return redirect()->route('settings')->with('success', 'Setting Updated Successfully');
    }

    public function contact(Request $request)
    {
        $setting = Setting::find(1);
        $setting->update([
            'contact_email'      => $request->get('contact_email'),
            'contact_landline'      => $request->get('contact_landline'),
            'contact_mobile'      => $request->get('contact_mobile'),
            'contact_hours'      => $request->get('contact_hours'),
            'contact_address'      => $request->get('contact_address'),
        ]);
        return redirect()->route('settings')->with('success', 'Setting Updated Successfully');
    }

    public function social(Request $request)
    {
        $setting = Setting::find(1);
        $setting->update([
            'fb_link'      => $request->get('fb_link'),
            'youtube_link'      => $request->get('youtube_link'),
            'twitter_link'      => $request->get('twitter_link'),
            'linkedin_link'      => $request->get('linkedin_link'),
            'google_link'      => $request->get('google_link')
        ]);
        return redirect()->route('settings')->with('success', 'Setting Updated Successfully');
    }

    public function style(Request $request)
    {
        $setting = Setting::find(1);
        if ($request->hasFile('style_logo')) {
            $file        = $request->file('style_logo');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/settings';
            $file_name   = 'logo-' . $setting->id . '.' . $extension;
            $file->move($destination, $file_name);
            Setting::where('id', $setting->id)->update(['style_logo' => $file_name]);
        }
        if ($request->hasFile('style_fav')) {
            $file        = $request->file('style_fav');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/settings';
            $file_name   = 'favicon-' . $setting->id . '.' . $extension;
            $file->move($destination, $file_name);
            Setting::where('id', $setting->id)->update(['style_fav' => $file_name]);
        }
        if ($request->hasFile('style_preload')) {
            $file        = $request->file('style_preload');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/settings';
            $file_name   = 'preload-' . $setting->id . '.' . $extension;
            $file->move($destination, $file_name);
            Setting::where('id', $setting->id)->update(['style_preload' => $file_name]);
        }
        return redirect()->route('settings')->with('success', 'Setting Updated Successfully');
    }

}
