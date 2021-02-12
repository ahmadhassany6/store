<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['customer_id','done'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

}
