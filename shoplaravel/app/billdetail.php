<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billdetail extends Model
{
    protected $table = 'bill_detail';
    public function products (){
    	return $this->belongsTo('App\products','id_products','id');
    }
    public function bill (){
    	return $this->belongsTo('App\bill','id_bill','id');
    }
}
