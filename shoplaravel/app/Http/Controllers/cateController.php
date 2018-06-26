<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\caterequest;
use App\typeproducts;
class cateController extends Controller
{
	public function getlist(){
		$data = typeproducts::select('id','name','description')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}
    public function getAdd(){
    	return view('admin.cate.add');
    }
    public function postAdd(caterequest $request){
    	$cate = new typeproducts();
    	$cate->name = $request->txtCateName;
    	$cate->description=$request->txtdescription;
    	$cate->save();
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
    }
    public function getDelete($id) {
        $data=typeproducts::find($id);
        $data->delete();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Xóa! thành công']);
    }
    public function getUpdate($id) {
        $data=typeproducts::find($id)->toArray();
        $parent=typeproducts::select('name','description')->get()->toArray();
        return view('admin.cate.edit',compact('parent','data'));
    } 
     public function postUpdate(Request $request,$id) {
        $this->validate($request,[
            "txtCateName" => "required"],
            ["txtCateName.required"=>"vui lòng !!!"
        ]);
        $cate=typeproducts::find($id);
        $cate->name = $request->txtCateName;
        $cate->description=$request->txtdescription;
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Sửa thành công']);
    }
}
