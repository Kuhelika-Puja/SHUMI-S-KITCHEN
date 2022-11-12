<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyNow extends Model
{
    public function products(){
    	return $this->belongsTo('App\Model\Product','product_id');
    }
}
