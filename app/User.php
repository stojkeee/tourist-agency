<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
/*
	public function offers(){
		return $this->belongsToMany('App\Offers', "orders");
	}
*/
	public function offer() {
		return $this->belongsToMany('App\Offer', 'orders', 'user_id', 'offer_id')->withPivot('phone_number')->withPivot('persons')->withTimestamps();
	}

}
