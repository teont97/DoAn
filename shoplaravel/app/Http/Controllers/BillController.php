<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\bill;
class BillController extends Controller
{
    public function getList(){
  $bill = DB::table('bill')->select('id','id_customer','date_order','total','status')->orderBy('id','DESC')->get();

 //$detail= DB::table('bill_detail')->select('id','id_bill','id_products','quantity','unit_price')->where('id_bill',$bill[0]->id)->get();  
  	
    return view('admin.bill.list',compact('bill','detail'));
    } 
  public function getDetail($id){
  $bill = DB::table('bill')->select('id','id_customer','date_order','total')->where('id',$id)->first();
  $detail1= DB::table('bill_detail')->select('id','id_bill','id_products','quantity','unit_price','created_at')->where('id_bill',$bill->id)->get();
  return view('admin.bill.bill_detail',compact('detail1','bill'));
    } 
  public function poststatus(Request $request){
     $data=bill::find($request->id);
     $data->status=1;  
     $data->save();
      //return response()->json(array('success'=> ), 200);
     //return back();
  }
  public function postdelete(Request $request){
    $delete=bill::find($request->id);
    $delete->delete();
  }
}
