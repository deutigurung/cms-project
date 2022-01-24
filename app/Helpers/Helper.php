<?php

namespace App\Helpers;

use App\Models\Banner;
use App\Models\Setting;

class Helper
{
    static function GeneralSiteSettings($var)
    {
        $Setting = Setting::find(1);
        return $Setting->$var;
    }

    // Banners array List
    static function BannersList()
    {
        return Banner::where('status', 1)->get();
    }

}
