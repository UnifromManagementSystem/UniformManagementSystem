<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_number';

    protected $fileable = ['product_number', 'product_name', 'product_image', 'product_price', 'product_text'];

}
