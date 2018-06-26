<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeproducts extends Model
{
    protected $table = 'type_products';

    public function products(){
    	return $this->hasMany('App\products','id_type','id');
    }
}
