<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'billing_name',
        'billing_email',
        'billing_phone',
        'billing_address',
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address',
    ];
}