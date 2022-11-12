<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomePageImage extends Model
{
    // public $timestamps = false;
    protected $fillabel = ['name','image', 'link', 'position'];
}
