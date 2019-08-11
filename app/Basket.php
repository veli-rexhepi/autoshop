<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'car_id',
    ];

    //
    // public function user() {
    // 	return $this->hasOne('App\User');
    // }
}
