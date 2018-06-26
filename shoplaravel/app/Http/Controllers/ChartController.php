<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ChartController extends Controller
{
    public function getData(){
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
    	dd($data1);
    	return view('admin.dashboard.dashboard',compact('data1','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12'));
    }
}
