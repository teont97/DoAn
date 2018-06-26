<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use App\Http\Requests\login; 
use Auth;
use App\Notifications\CreatePost;
use App\Notifications\Usernoti;
class userController extends Controller
{
   public function getAdd(){
   	return view('admin.user.add');
   }
   public function postAdd(UserRequest $request){
      $user= User::find(1);
   	$cate = new User();
   	$cate->name = $request->txtUser;
   	$cate->email=$request->txtEmail;
   	$cate->password	= Hash::make($request->txtPass);
   	$cate->remember_token=$request->_token;
      $cate->post_id=1;
   	$cate->level=1;
      $cate->save();
      $user->notify(new Usernoti());
    return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
   }
   public function getlist(){
   	$data=User::all();
   	return view('admin.user.list',compact('data'));
   }
	public function getDelete(){
   	
   }
   public function getUpdate(){
   	
   }
   public function postUpdate(){
   	
   }
   public function getlogin(){
   
   		return view('admin.login');
   		
   	
   }
   public function postlogin(login $request){
   	
   		$login = array(
   			'email' => $request->txtemail,
   			'password'=> $request->txtpassword
   		);
   		if(Auth::attempt($login)){
   			return redirect()->route('admin.dashboard');
   		}
   		else{
   			return redirect()->back();
   		}
   }

   public function logout()
   {
   	Auth::logout(); // giúp logout để xóa session . 
   	return redirect()->route('admin');
   }

}
