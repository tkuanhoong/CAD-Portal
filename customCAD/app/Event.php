<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'banner',
        'description',
        'location',
        'organizer',
        'organized_at',	
        'fee',
        'attendance_link',
        'whatsapp_link',
        'meeting_link'
    ];
    public function users(){
        return $this->belongsToMany('\App\User');
    }
}
