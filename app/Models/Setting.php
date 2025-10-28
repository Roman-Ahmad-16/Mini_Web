<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        "logo",
        "fav_icon",
        "footer_logo",
        "home_beadcrum_img",
        'phone_no',
        'phone_no_2',
        'whatsapp_no',
        'email',
        'address',
        'setting_profile',
        'fb_link',
        'insta_link',
        'yt_link',
        'tiktok_link',
        'whatsapp_link'
    ];
}
