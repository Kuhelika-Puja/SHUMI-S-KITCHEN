<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    public $timestamps = false;
    protected $fillabel = ['heading','content'];
}
