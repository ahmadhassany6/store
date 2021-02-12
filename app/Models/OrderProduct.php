<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_product';

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function optionVariantProducts()
    {
        return $this->belongsToMany(OptionVariantProduct::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
