<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';

    public function type_products(){
    	return $this->belongsTo('App\typeproducts','id_type','id');
    }
    public function bill_detail(){
    	return $this->hasMany('App\billdetail','id_products','id');
    }
    public function Pimages(){
    	return $this->hasMany('App\products_img','id_products','id');
    }
}
