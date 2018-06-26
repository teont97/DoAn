<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function getAdd(){
 $customer = DB::table('customer')->select('id','name','email','address','numberphone','created_at')->where('created_at','>',Carbon::now()->subDays(7)->startOfDay())->count();
 $bill = DB::table('bill')->select('id','id_customer','date_order','	total')->where('date_order','>',Carbon::now()->subDays(7)->startOfDay())->count();
 $products = DB::table('products')->select('id','name','id_type','description','unit_price','promotion_price','images','unit')->count();
 $notity1 = DB::table('bill')->select('created_at')->orderBy('id','DESC')->first();
 $note_customer = DB::table('customer')->select('created_at')->orderBy('id','DESC')->first();
 $note_blog = DB::table('tin_tuc')->select('created_at')->orderBy('id','DESC')->first();
 //dd($note_blog);
 $note_products = DB::table('products')->select('created_at')->orderBy('id','DESC')->first();
 $note_user = DB::table('users')->select('created_at')->orderBy('id','DESC')->first();
 //	$dd =Carbon::createFromTimeStamp(strtotime($note_customer->created_at))->diffForHumans();
 	//dd($dd);
// $tinhtoan=Carbon::now();

 //dd($note_blog);
 	$data1 = DB::table('bill')
                ->whereMonth('created_at', '1')
                ->count();
        $data2 = DB::table('bill')
                ->whereMonth('created_at', '2')
                ->count();
        $data3 = DB::table('bill')
                ->whereMonth('created_at', '3')
                ->count();
        $data4 = DB::table('bill')
                ->whereMonth('created_at', '4')
                ->count();
        $data5 = DB::table('bill')
                ->whereMonth('created_at', '5')
                ->count();
        $data6 = DB::table('bill')
                ->whereMonth('created_at', '6')
                ->count();
        $data7 = DB::table('bill')
                ->whereMonth('created_at', '7')
                ->count();
        $data8 = DB::table('bill')
                ->whereMonth('created_at', '8')
                ->count(); 
        $data9 = DB::table('bill')
                ->whereMonth('created_at', '9')
                ->count();
        $data10 = DB::table('bill')
                ->whereMonth('created_at', '10')
                ->count();
       	$data11 = DB::table('bill')
                ->whereMonth('created_at', '11')
                ->count();
        $data12 = DB::table('bill')
                ->whereMonth('created_at', '12')
                ->count();       
    	//$data=DB::table('bill')->select(month('created_at'),count('id'))->group by month->get();
    	//dd($data2);
         $data_users1 = DB::table('users')
                ->whereMonth('created_at', '1')
                ->count();
        $data_users2 = DB::table('users')
                ->whereMonth('created_at', '2')
                ->count();
        $data_users3 = DB::table('users')
                ->whereMonth('created_at', '3')
                ->count();
        $data_users4 = DB::table('users')
                ->whereMonth('created_at', '4')
                ->count();
        $data_users5 = DB::table('users')
                ->whereMonth('created_at', '5')
                ->count();
        $data_users6 = DB::table('users')
                ->whereMonth('created_at', '6')
                ->count();
        $data_users7 = DB::table('users')
                ->whereMonth('created_at', '7')
                ->count();
        $data_users8 = DB::table('users')
                ->whereMonth('created_at', '8')
                ->count(); 
        $data_users9 = DB::table('users')
                ->whereMonth('created_at', '9')
                ->count();
        $data_users10 = DB::table('users')
                ->whereMonth('created_at', '10')
                ->count();
       	$data_users11 = DB::table('users')
                ->whereMonth('created_at', '11')
                ->count();
        $data_users12 = DB::table('users')
                ->whereMonth('created_at', '12')
                ->count();
   return view('admin.dashboard.dashboard',compact('customer','bill','products','notity1','note_customer','note_blog','note_products','note_user','data1','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data_users1','data_users2','data_users3','data_users4','data_users5','data_users6','data_users7','data_users8','data_users9','data_users10','data_users11','data_users12'));
    }
   /*	public function getData(){
    
    	return view('admin.dashboard.dashboard',compact('data1','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12'));
    }*/
}

