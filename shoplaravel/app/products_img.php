<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products_img extends Model
{
    protected $table = 'products_img';
    public function product(){
    	return $this->belongsTo('App\products','id_products','id');
    }
}
