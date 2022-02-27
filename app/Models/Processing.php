<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'customer_id',
		'customer_name',
		'customer_address',
		'order_details',
		'amount',
		'currency',
		'payment_gateway',
		'created_at',
		'updated_at',
	];	
}
