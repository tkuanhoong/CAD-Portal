<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $fillable =[
        'mission1', 'mission2', 'mission3', 'mission4', 'vision1','vision2','vision3','vision4'
    ];
}
