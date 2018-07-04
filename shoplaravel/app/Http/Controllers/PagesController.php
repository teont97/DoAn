<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Mail;
use Session;
use links;
use App\User;
use Hash;
use App\news;
use App\products;
use Auth;
class PagesController extends Controller
{
    public function GetProducts(){
    	$Product= DB::table('products')->select('id','name','images','unit_price','unit')->orderBy('id','DESC')->skip(0)->take(5)->get();
    	return view('client.pages.products',compact('Product','product_cate'));
    }
    public function loaisanpham($type){
$product_type= DB::table('products')->select('id','name','id_type','images','unit_price','unit')->orderBy('id','DESC')->where('id_type',$type)->skip(0)->take(5)->get();
    	$product_cate1=DB::table('type_products')->select('id','name','description')->where('id',$type)->get();
    	return view('client.pages.cateproducts',compact('product_type','product_cate1'));
    }
    public function GetAbout(){
			return view('client.pages.about');
    }
    public function GetProductDetail($id){
  $products_detail=DB::table('products')->select('id','name','id_type','images','unit_price','unit','description')->where('id',$id)->first();
  $product_type1= DB::table('products')->select('id','name','id_type','images','unit_price','unit')->orderBy('id','DESC')->where('id_type',$products_detail->id_type)->paginate(2);
  $Images= DB::table('products_img')->select('id','images')->where('id_products',$products_detail->id)->get();
 	return view('client.pages.productsdetail',compact('products_detail','Images','product_type1'));
    }
    public function GetShopingCart(){
    	return view('client.pages.shoping_cart');
    }
    public function GetBlog(){
        $data_blog=DB::table('tin_tuc')->select('id','title','alias','abbreviate','content','Keywords','images','view','id_cate','id_user','created_at')->offset(3)  ->orderBy('id','DESC')->paginate(4);
        $categories=DB::table('loaitin')->select('id','name')->get();
        $data_products=DB::table('products')->orderByRaw("RAND()")->take(3)->get();

       // dd($data_blog);
    	return view('client.pages.blog',compact('data_blog','categories','data_products'));
    }
    public function GetBlogDetail($id){
        $blog_detail=news::find($id);
    $data_detail=DB::table('tin_tuc')->select('id','title','alias','abbreviate','content','Keywords','images','view','id_cate','id_user','created_at')->where('id',$blog_detail['id'])->first();
    $categories=DB::table('loaitin')->select('id','name')->get();
    $data_products=DB::table('products')->orderByRaw("RAND()")->take(3)->get();
                if(Auth::check())
                {
                    $user=Auth::user();
                }
    //dd($data_products);
   // dd($categories);
        //dd($data_detail);
        //dd($blog_detail['id']);
    	return view('client.pages.blog_detail',compact('data_detail','categories','data_products','user'));
    }
    public function GetContact(){

    	return view('client.pages.contact');
    }
    public function PostContact(Request $request){
        $input = $request->all();
        Mail::send('client.Mail',array('email'=>$input['email'],'content'=>$input['msg']), function($msg){
            $msg->from('ncchi1997@gmail.com','Conza Store');
            $msg->to('teont98@gmail.com','Conza')->subject('Conza Store Contact');
        });
        return back()->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Gửi Thành Công!!!']);
    }
    public function Getlogin(){
        return view('client.pages.PagesLogin');
    }
    public function PostRegister(Request $request){
            $User = new User();
            $User->name = $request->txtname;
            $User->email=$request->email;
            $User->password = Hash::make($request->password);
            $User->remember_token=$request->confirm_password;
            $User->level=0;
            $User->post_id=0;
            $User->save();
            return redirect()->route('Getregister')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
    }
    public function Getregister(){
        return view('client.pages.register');
    }
   public function PostLogin(Request $request){
        $login = array(
            'email' => $request->username,
            'password'=> $request->password
        );
        if(Auth::attempt($login)){
            return redirect()->route('gethome');
        }
        else{
            return redirect('login')->with('mesage','Đăng Nhập Không Thành Công . Vui Lòng Đăng Nhập Lại !!! ');
        }
   }
   public function logoutUser(){
    Auth::logout(); // giúp logout để xóa session . 
    return redirect()->route('gethome');
   }
   public function searchByProducts(Request $request){
    $result = products::where('name', 'like', '%' . $request->value . '%')->get();
    return response()->json($result);
   }
   public function getSearch(Request $request){
    $result_products = products::where('name', 'like', '%' . $request->key .'%')->orWhere('unit_price',$request->key)->get();
        return view('client.pages.search',compact('result_products'));
   }
   public function getSearchBlog(Request $request){
    $result_news = news::where('title', 'like', '%' . $request->key .'%')->orderBy('id','DESC')->get();
     $categories=DB::table('loaitin')->select('id','name')->get();
        $data_products=DB::table('products')->orderByRaw("RAND()")->take(3)->get();
        return view('client.pages.search_blog',compact('result_news','categories','data_products'));
   }
   public function PostComment(Request $request){

   }

   
}
