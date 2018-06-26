<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\cate_new;
use App\news;
class NewsController extends Controller
{
    public function getAdd(){
    	$news=cate_new::all();
        //dd($news);
    	return view('admin.news.add',compact('news'));
    }
    public function postAdd(Request $request){
    	$this->validate($request,[
    		'txtTitle'=>'required',
    		
    		'txtAbbreviate'=>'required',
    		'txtContent'=>'required',
    		'txtKeyWords'=>'required'
    	],[
    		'txtTitle.required'=>'Vui Lòng Nhập Vào Tiêu Đề Bài Viết',
    		//'SCate.required'=>'Vui Lòng Chọn Loại Tin',
    	'txtAbbreviate.required'=>'Vui lòng nhập vào tóm tắt bài viết',
    		'txtContent.required'=>'Vui lòng nhập vào nội dung bài viết',
    		'txtKeyWords.required'=>'Vui lòng nhập vào từ khóa chính'
    	]);
        $file_name=$request->file('fImages')->getClientOriginalName();
        //dd($file_name);
    	$new= new news();
    	$new->title=$request->txtTitle;
    	$new->id_cate=$request->SCate;
    	$new->alias=changeTitle($request->txtTitle);
    	$new->abbreviate=$request->txtAbbreviate;
    	$new->content=$request->txtContent;
    	$new->images=$file_name;
    	$new->Keywords=$request->txtKeyWords;
    	$new->view=0;
    	$new->id_user=$request->rdoStatus;
        $request->file('fImages')->move('resources/views/admin/UploadImages',$file_name);
    	$new->save();
    	return redirect()->route('admin.news.getadd')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
    }
    public function getList(){
    $datanew=DB::table('tin_tuc')->select('id','title','alias','abbreviate','content','images','Keywords','view','id_cate','id_user','created_at')->orderBy('id','DESC')->get();
        return view('admin.news.list',compact('datanew'));
    }
    public function getDelete($id){
        $data=news::find($id);
        $data->delete();
        return redirect()->route('admin.news.getlist')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Xóa thành công']);

    }
    public function getUpdate(){
        
    }
    public function postUpdate(){
        
    }
}
