<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable =[
        'address','phone','email','website'
    ];
}
