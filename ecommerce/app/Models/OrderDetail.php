<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'number'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
