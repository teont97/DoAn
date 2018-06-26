<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\products;
use App\typeproducts;
use DB;
use File;
use App\products_img;
use Illuminate\Support\Facades\Input;
class productsController extends Controller
{
    public function getAdd(){
    	$data= typeproducts::all();
    	return view('admin.products.add',compact('data'));
    }
    public function postAdd(Request $request){
     $this->validate($request,[
            "txtName" => "required"],
            ["txtName.required"=>"vui lòng nhập vào tên !!!"
        ]);
        $file_name=$request->file('fImages')->getClientOriginalName();
    	$products = new products();
    	$products->name = $request->txtName;
    	$products->id_type=$request->txtcate;
    	$products->description=$request->txtDescription;
    	$products->unit_price= $request->txtUnitPrice;
    	$products->promotion_price = $request->txtPromotionPrice;
    	$products->images = $file_name;
    	$products->unit = $request->txtUnit;
    	$request->file('fImages')->move('resources/views/admin/UploadImages',$file_name);
    	$products->save();
        $products_id=$products->id; 
        if(Input::hasFile('fproductimg')){
           foreach (Input::file('fproductimg') as $file) {
                $products_img= new products_img();
                    if(isset($file)){
                        $products_img->images=$file->getClientOriginalName();
                        $products_img->id_products=$products_id;
                        $file->move('resources/views/admin/UploadImages/detail',$file->getClientOriginalName());
                        $products_img->save();
                    }
                }

                # code...
            }
        
            return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
        }
    public function getlist (){
    	$data = DB::table('products')->select('id','name','id_type','description','unit_price','promotion_price','images','unit')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.products.list',compact('data'));
    }
    public function getdelete($id){
        $products_detail= products::find($id)->Pimages;
        foreach ($products_detail as $iteam) {
            File::delete('resources/views/admin/UploadImages/detail/'.$iteam['images']);
                }
        $product= products::find($id);
        File::delete('resources/views/admin/UploadImages/'.$product->images);
        $product->delete($id);
        return redirect()->route('admin.products.getlist')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã xoa thành công']);
    }
}


