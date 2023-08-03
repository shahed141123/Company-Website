<?php

namespace App\Models\Frontend;

use App\Models\Admin\Product;
use App\Models\Frontend\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

     public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
