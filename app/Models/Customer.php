<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
	public $table = 'customer_details'; //overriding lara default
	
	protected $fillable = [    
		'int_user',
		'str_cname',
		'str_fname',
		'str_lname',
		'str_addr1',
		'str_addr2',
		'str_city',
		'str_country',
		'str_pcode',
		'str_telephone',
	];
}
