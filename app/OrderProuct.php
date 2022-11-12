<?php

namespace App;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class OrderProuct extends Model
{
    
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
