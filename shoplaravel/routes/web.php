<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('register',['as'=>'post.register','uses'=>'PagesController@PostRegister']);
Route::post('login',['as'=>'post.login','uses'=>'PagesController@PostLogin']);
Route::get('add2',['as'=>'cart.add2','uses'=>'ShopingCartController@PostCheckOut']);
Route::group(['prefix'=>'Cart'],function(){
	Route::get('add/{id}',['as'=>'cart.add','uses'=>'ShopingCartController@GetAddCart']);
	Route::get('show',['as'=>'cart.show','uses'=>'ShopingCartController@GetShowCart']);
	Route::get('delete/{id}',['as'=>'cart.delete','uses'=>'ShopingCartController@GetDeleteCart']);
	Route::get('update',['as'=>'cart.update','uses'=>'ShopingCartController@GetUpdateCart']);
	Route::post('checkout',['as'=>'cart.checkout','uses'=>'ShopingCartController@PostCheckOut']);

});
Route::get('/',['as'=>'gethome','uses'=>'homecontroller@gethome']);
//Route::get('blog',['as'=>'gethome','uses'=>'homecontroller@gethome']);

Route::get('loai-san-pham/{type}',['as'=>'getcate','uses'=>'PagesController@loaisanpham']);
Route::get('register',['as'=>'Getregister','uses'=>'PagesController@Getregister']);
Route::get('login',['as'=>'Getlogin','uses'=>'PagesController@Getlogin']);
Route::get('products',['as'=>'Products','uses'=>'PagesController@GetProducts']);
Route::get('products-detail/{id}',['as'=>'detail','uses'=>'PagesController@GetProductDetail']);
Route::get('shoping-cart',['as'=>'shoping_cart','uses'=>'PagesController@GetShopingCart']);
Route::get('about',['as'=>'about','uses'=>'PagesController@GetAbout']);
Route::get('blog',['as'=>'blog','uses'=>'PagesController@GetBlog']);
Route::get('blog-detail/{id}',['as'=>'blog_detail','uses'=>'PagesController@GetBlogDetail']);
Route::get('contact',['as'=>'contact','uses'=>'PagesController@GetContact']);
Route::post('contact',['as'=>'postcontact','uses'=>'PagesController@PostContact']);
Route::get('search/products', 'PagesController@searchByProducts');
Route::get('search',['as'=>'getsearch' ,'uses'=>'PagesController@getSearch']);
Route::get('search-blog',['as'=>'getSearchBlog' ,'uses'=>'PagesController@getSearchBlog']);

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
	Route::get('dashboard',['as'=>'admin.dashboard','uses'=>'DashboardController@getAdd']);
	//Route::get('dashboard',['as'=>'admin.dashboard','uses'=>'DashboardController@getAdd']);
	//Route::get('chart.js',['as'=>'admin.chart','uses'=>'ChartController@getData']);
	Route::group(['prefix'=>'bill'],function(){
		Route::get('list',['as'=>'admin.bill.getlist','uses'=>'BillController@getList']);
		Route::post('update',['as'=>'admin.bill.poststatus','uses'=>'BillController@poststatus']);
		Route::post('delete',['as'=>'admin.bill.postdelete','uses'=>'BillController@postdelete']);
		Route::get('detail_order/{id}',['as'=>'admin.bill.getDetail','uses'=>'BillController@getDetail']);
	});
	Route::group(['prefix'=>'cate'],function(){
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'cateController@getDelete']);
		Route::get('update/{id}',['as'=>'admin.cate.getUpdate','uses'=>'cateController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.cate.postUpdate','uses'=>'cateController@postUpdate']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'cateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'cateController@postAdd']);
		Route::get('list',['as'=>'admin.cate.list','uses'=>'cateController@getlist']);
	});
	Route::group(['prefix'=>'cate_new'],function(){
		Route::get('add',['as'=>'admin.cate_new.getadd','uses'=>'CateNewController@getAdd']);
		Route::post('add',['as'=>'admin.cate_new.postadd','uses'=>'CateNewController@postAdd']);
		Route::get('list',['as'=>'admin.cate_new.getlist','uses'=>'CateNewController@getList']);
		Route::get('delete/{id}',['as'=>'admin.cate_new.getdelete','uses'=>'CateNewController@getDelete']);
	});
	Route::group(['prefix'=>'news'],function(){
		Route::get('add',['as'=>'admin.news.getadd','uses'=>'NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.postadd','uses'=>'NewsController@postAdd']);
		Route::get('list',['as'=>'admin.news.getlist','uses'=>'NewsController@getList']);
		Route::get('delete/{id}',['as'=>'admin.news.getdelete','uses'=>'NewsController@getDelete']);
		Route::get('update/{id}',['as'=>'admin.news.getupdate','uses'=>'NewsController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.news.postupdate','uses'=>'NewsController@postUpdate']);
	});
	Route::group(['prefix'=>'customer'],function(){
		Route::get('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
		Route::get('delete/{id}',['as'=>'admin.customer.getdelete','uses'=>'CustomerController@getDelete']);
	});
	Route::group(['prefix'=>'products'],function(){
		Route::get('add',['as'=>'admin.products.getAdd','uses'=>'productsController@getAdd']);
		Route::post('add',['as'=>'admin.products.postAdd','uses'=>'productsController@postAdd']);
		Route::get('list',['as'=>'admin.products.getlist','uses'=>'productsController@getlist']);
		Route::get('delete/{id}',['as'=>'admin.products.getdelete','uses'=>'productsController@getdelete']);		
	});
	Route::group(['prefix'=>'users'],function(){
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'userController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'userController@postAdd']);
		Route::get('list',['as'=>'admin.user.getlist','uses'=>'userController@getlist']);	
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'userController@getDelete']);
		Route::get('update/{id}',['as'=>'admin.user.getUpdate','uses'=>'userController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.user.postUpdate','uses'=>'userController@postUpdate']);	
	});
});
Route::get('admin',['as'=>'admin','uses'=>'userController@getlogin']);
Route::post('admin',['as'=>'admin','uses'=>'userController@postlogin']);
Route::get('logout','userController@logout')->name('logout');
Route::get('load/{page}',['as'=>'home.getload','uses'=>'homecontroller@Getload']);
Route::get('loadtype/{type}',['as'=>'home.getloadtype','uses'=>'homecontroller@GetLoadType']);





















	