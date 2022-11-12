<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\BuyNow;
class Product extends Model
{
	protected $fillable = [ 'category_id','name','price','currency','description','image'];

    public function currencys(){
    	return $this->hasMany('App\Currency','currency');
    }

    public function orders(){

        return $this->belongsTo('App\BuyNow');

    }
}

