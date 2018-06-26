<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class bill extends Model
{
	use Notifiable;
    protected $table = 'bill';
    public function bill_detail (){
    	return $this->hasMany('App\billdetail','id_bill','id');
    }
    public function customer (){
   return $this->belongsTo('App\customer','id_customer','id');
    }
}
