<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable =  [
        'site_title','site_desc', 'site_keywords','site_url','site_status','close_msg','fb_link',
        'youtube_link','linkedin_link','twitter_link','google_link','contact_email',
        'contact_address','contact_landline','contact_mobile','contact_hours','style_logo',
        'style_fav','style_preload'
    ];
}
