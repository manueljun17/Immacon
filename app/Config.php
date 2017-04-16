<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
    	'key',
    	'value'
    ];
    public static $rules = array(
        'key' => 'required',
        'value' => 'required'
    );
}
