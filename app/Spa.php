<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spa';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','district','province','detail','price','worktime_start','worktime_stop','image'];
}
