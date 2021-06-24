<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{

    protected $fillable = [
        'user_id','name', 'email','reason','status','quantity', 'company_name'
    ];


    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

}
