<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cate_new extends Model
{
    protected $table = 'loaitin';
    public function tin_tuc(){
    	return $this->hasMany('App\news','id_cate','id');
    }
    
}
