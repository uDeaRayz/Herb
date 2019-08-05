<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docter extends Model
{
    protected $table = 'docter';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['name','history','disease','address','district','province','zipcode','phone','price','worktime_start','worktime_stop','image'];
}








