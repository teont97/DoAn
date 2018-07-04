<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    public function blog (){
    	return $this->hasMany('App\news','id_blog','id');
    }
    public function user (){
   		return $this->belongsTo('App\User','id_user','id');
    }
}
