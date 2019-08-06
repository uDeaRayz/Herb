<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docter extends Model
{
    protected $table = 'docter';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['name','history','disease','address','age','subdis','district','province','price','worktime_start','worktime_stop','image'];
}








