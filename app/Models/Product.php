<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tb_product'; 

    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'price',
        'diamond_amount',
    ];
}
