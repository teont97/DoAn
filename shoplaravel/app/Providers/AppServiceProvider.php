<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use typeproducts;
use DB;
use Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.blocks.header',function($view){
            $cate=DB::table('type_products')->select('id','name','description')->orderBy('id','DESC')->get();;
            $view->with('cate',$cate);
        });
        view()->composer('client.blocks.cart',function($view){
            $data_iteam1=Cart::content();
            $data_total=Cart::total();
            $data_sub=Cart::subtotal();
            $view->with('data_iteam1',$data_iteam1);
            $view->with('data_total',$data_total);
            $view->with('data_sub',$data_sub);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
