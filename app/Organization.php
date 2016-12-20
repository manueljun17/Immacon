<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function parishofficers()
    {
    	return $this->belongsToMany('App\Parishofficers')->withTimestamps();
    }
}
