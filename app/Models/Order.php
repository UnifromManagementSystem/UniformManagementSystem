<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_number';
    public $timestamps = false;

    protected $fileable = ['order_count', 'order_situ', 'deposit_situ', 'order_price', 'order_date', 'id', 'product_number'];

}
