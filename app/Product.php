<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['name','detail','image','price','type'];
}
