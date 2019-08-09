<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    protected $table = 'herbs';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['name','detail','price','stock','image','drugDetail'];
}
