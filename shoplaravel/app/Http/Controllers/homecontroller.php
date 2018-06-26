<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\typeproducts;

class homecontroller extends Controller
{
    public function gethome(){
    	$product= DB::table('products')->select('id','name','id_type','images','unit_price','unit')->orderBy('id','DESC')->skip(0)->take(8)->get();
    	$product_cate=DB::table('type_products')->select('id','name','description')->orderBy('id','DESC')->get();
    	$blog= DB::table('tin_tuc')->select('id','title','alias','abbreviate','content','Keywords','images','view','id_cate','id_user','created_at')->orderBy('id','DESC')->skip(0)->take(3)->get();
    	return view('client.pages.home',compact('product','product_cate','product_type','blog'));

    }
    public function Getload($page){
    $sotin=5;
    $from=($page-1)*$sotin;
    $form_start = $from + 5;
    $data= DB::table('products')->select('id','name','id_type','images','unit_price','unit')->orderBy('id','DESC')->skip($form_start)->take($sotin)->get();
    return view('client.sanpham',compact('data'));
 	//return view('client.pages.home');
    }
    public function GetLoadType($type){
    $data=DB::table('products')->select('id','name','id_type','images','unit_price','unit')->where('id_type',$type)->get();
    $datall=DB::table('products')->select('id','name','id_type','images','unit_price','unit')->orderBy('id','DESC')->get();

    return view('client.sanphamtype',compact('data','type','datall'));
    }
}
