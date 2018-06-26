<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cart;
use App\products;
use App\customer;
use App\bill;
use App\billdetail;
use parseInt;
use parseFloat;
use auth;
use App\Notifications\CreatePost;
use App\User;
class ShopingCartController extends Controller
{
    public function GetAddCart($id){
    	$data = products::find($id);
    	Cart::add(['id' => $id, 'name' => $data->name , 'qty' => 1, 'price' => $data->unit_price, 'options' => ['img' => $data->images]]);
    	return redirect()->route('cart.show');
        }
    public function GetShowCart(){
    	$data_total=Cart::total(); 
    	$data_iteam=Cart::content();
    	$data_sub=Cart::subtotal();
    	return view('client.pages.shoping_cart',compact('data_iteam','data_total','data_sub'));
    }
    public function GetDeleteCart($id){
    	Cart::remove($id);
    	return back();
    }
    public function GetUpdateCart(Request $request){
    	Cart::update($request->rowId,$request->qty);
    }
    public function PostCheckOut(Request $request){
    	$this->validate($request,[
            'txtEmail' => 'required',
            'txtName'=>'required',
            'txtPhone'=>'required',
            'txtAddress'=>'required'
        ],

        ["txtEmail.required"=>"vui lòng nhập vào Email !!!",
        "txtName.required"=>"vui lòng nhập vào Name !!!",
        "txtPhone.required"=>"vui lòng nhập vào Phone !!!",
        "txtAddress.required"=>"vui lòng nhập vào Address !!!"
            
        ]);
        $user= User::find(1); 
        $data_total=Cart::total();
   		$data=Cart::content();
    	$customer= new customer();
    	$customer->name=$request->txtName;
    	$customer->email=$request->txtEmail;
    	$customer->address=$request->txtAddress;
    	$customer->numberphone=$request->txtPhone;
    	$customer->save();
    	$bill = new bill();
    	$bill->id_customer=$customer->id;
    	$bill->date_order=date('Y-m-d');
        $str=str_replace('.','',$data_total);
    	$bill->total=$str;
        $bill->status=0;
    	$bill->save();
    	foreach ($data as $iteam) {
    	$bill_detail= new billdetail();
    	$bill_detail->id_bill=$bill->id;
    	$bill_detail->id_products=$iteam->id;
    	$bill_detail->quantity=$iteam->qty;
        $data=($iteam->price/$iteam->qty);
    	$bill_detail->unit_price=($iteam->price/$iteam->qty);
    	$bill_detail->save();
    	}
    	Cart::destroy();
    	return redirect()->back()->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Đặt Hàng Thành Công!!!']); 
    } 
}
