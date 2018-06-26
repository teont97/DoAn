<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cate_new;
class CateNewController extends Controller
{
    public function getAdd(){

    	return view('admin.cate_new.add');
    }
    public function postAdd(Request $request){
 
    	$this->validate($request,[
            'txtCateName1' => 'required|unique:loaitin,name'
        ],

            ["txtCateName1.required"=>"vui lòng nhập vào tên thể loại !!!",
            "txtCateName1.unique"=>"Loại Tin Này Đã Có ",
        ]);
    	$cate = new cate_new();
    	$cate->name = $request->txtCateName1;
    	$cate->alias= changeTitle($request->txtCateName1);
    	$cate->save(); 
    	return redirect()->route('admin.cate_new.getlist')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
   	}
    public function getList(){
    	$data = cate_new::select('id','name','alias')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.cate_new.list',compact('data'));
    }
      public function getDelete($id) {
        $data=cate_new::find($id);
        $data->delete();
        return redirect()->route('admin.cate_new.getlist')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Xóa! thành công']);
    } 
}
