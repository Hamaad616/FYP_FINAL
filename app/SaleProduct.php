<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleProduct extends Model
{
    protected $table = 'sale_products';


    public function sizes()
    {
    	return $this->belongsTo('App\VariantValue','size','id');
    }

    public function colors()
    {
    	return $this->belongsTo('App\VariantValue','color','id');
    }

    public function materials()
    {
    	return $this->belongsTo('App\VariantValue','material','id');
    }

    public function product(){
    	return $this->belongsTo('App\Product');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }

}
