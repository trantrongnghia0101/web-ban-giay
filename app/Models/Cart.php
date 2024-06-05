<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'img',
        'quantity',
        'price',
        'bill_id',
    ];
    protected $table = 'cart';
}