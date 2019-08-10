<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','spa_id','herb_id','docter_id','payment_id','cart','name','address','phone','status','image','date','time','typeBooking'];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
