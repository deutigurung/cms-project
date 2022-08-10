<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Setting();
        $settings->site_title = "Content Management System";
        $settings->site_desc = "Website description and some little information about it";
        $settings->site_keywords = "cms,key,words, website, web";
        $settings->site_url = "http://site.com";
        $settings->site_status = 1;
        $settings->close_msg = "Website under maintenance Comming SOON";

        $settings->fb_link = "#";
        $settings->youtube_link = "#";
        $settings->twitter_link = "#";
        $settings->linkedin_link = "#";
        $settings->google_link = "#";

        $settings->contact_email = "info@site.com";
        $settings->contact_address = "Kathmandu, Nepal";
        $settings->contact_landline = "0145245";
        $settings->contact_mobile = "9812121212";
        $settings->contact_hours = "Sunday to Friday 10:00 AM to 05:00 PM";

        $settings->save();

    }
}
