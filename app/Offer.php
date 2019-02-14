<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function PHPSTORM_META\type;

class Offer extends Model
{
	protected $fillable = array('title', 'price','date','description', 'mime', 'original_filename', 'filename', 'type', 'country');

	public function user() {
		return $this->belongsToMany('App\User', 'orders', 'offer_id', 'user_id')->withPivot('phone_number')->withPivot('persons')->withTimestamps();
	}


}
