<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = "patients";
    protected $fillable = [
    	'name',
    	'gender',
    	'text',
    	'address',
    	'born_date',
    	'phone_number',
    	'blood_type'
    ];
}
