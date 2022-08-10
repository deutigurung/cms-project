<?php

namespace App\Helpers;

use App\Models\Banner;
use App\Models\Menu;
use App\Models\Service;
use App\Models\Setting;

class Helper
{
    static function GeneralSiteSettings($var)
    {
        $Setting = Setting::find(1);
        return $Setting->$var;
    }

    static function menusList()
    {
        return Menu::where('parent_id', '=', 0)->get();
    }

    // Banners array List
    static function BannersList()
    {
        return Banner::where('status', 1)->get();
    }

    static function ServicesList()
    {
        return Service::where('status', 1)->latest()->get();
    }

}
