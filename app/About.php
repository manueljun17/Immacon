<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
    	'mission',
    	'vision',
    	'history',
        'location',
        'bank_account',
        'email_account'
    ];

}
