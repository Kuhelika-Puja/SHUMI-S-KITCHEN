<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Order extends Model
{
    protected $fillable = [ 'product_id', 'name','phone','address'];

    public function user()
    {
    	 return $this->belongsTo(User::class);
    }
}
