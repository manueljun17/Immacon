<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'cell_number',
    	'phone_number',
        'address',
    	'email_account',
        'account_name',
    	'account_number'
    ];
    public static $rules = array(
        'cell_number' => 'required',
        'phone_number' => 'required',
        'address' => 'required',
        'email_account' => 'required',
        'account_name' => 'required',
        'account_number' => 'required'
    );
}
