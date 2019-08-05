<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
