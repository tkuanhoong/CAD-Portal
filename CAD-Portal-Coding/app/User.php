<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','verification'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('\App\Role');
    }

    public function events(){
        return $this->belongsToMany('\App\Event','registration')->withTimestamps()
        ->withPivot('id','email','full_name','phone_number','ic_number','matric_number','payment_amount');
    }


    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }

        return false;
    }
}
