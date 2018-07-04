<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table ='tin_tuc';
    public function loaitin(){
    	return $this->belongsTo('App\cate_new','id_cate','id');
    }
    public function users(){
    	return $this->belongsTo('App\User','post_id','id');
    }
    public function comment(){
    	return $this->belongsTo('App\comments','id_blog','id');
    }
}
