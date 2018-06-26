<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\customer;
class CustomerController extends Controller
{
    public function getList(){
    	$data=DB::table('customer')->select('id','name','email','address','numberphone')->get();
    	return view('admin.customer.list',compact('data'));
    }
    public function getDelete($id){
    	$data=customer::find($id);
    	//dd($data);
        $data->delete();
        return redirect()->route('admin.customer.getlist')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Xóa! thành công']);

    }
}
