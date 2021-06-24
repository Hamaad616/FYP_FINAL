<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    protected $table = 'bulk';
    protected $fillable = [
        'user_id',
    	'product_name',
    	'quantity',
    	'desire_amount',
    	'time_limit',
    	'country',
    	'email',
    	'message',
        'status',
        'product_id'
    ];

    public function users(){
       return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

}
