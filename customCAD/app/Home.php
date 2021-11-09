<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'upcoming_programs',
        'programs_completed',
        'members',
        'years',
        'facebook_link',
        'instagram_link',
        'telegram_link'
    ];
}
