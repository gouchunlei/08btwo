<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;

class CarController extends Controller
{
    //购物车
    public function index(Request $request)
    {
        $goods_info = $request->session()->get("cartinfo");
        // echo "<pre>";
        // print_r($goods_info);
        // 根据sku_id来获取商品的详细信息
    	return view('car/BuyCar',["goods_info"=>$goods_info]);
    }
    //确认订单
    public function car2()
    {
    	return view('car/BuyCar_Two');
    }
    //结算
    public function car3()
    {
    	return view('car/BuyCar_Three');
    }
    /**
     * [AddCart description]
     * @param [type] $goods_id  [description]
     * @param [type] $goods_num [description]
     */
    public function AddCart(Request $request) {
        //获取 goods_id,goods_num;
        $goods_data = $request->all();
        //判断是否有用户信息;
        $cookie = Cookie::get("userinfo");
        if(!empty($cookie)) {

        }else {
            //创建购物车对象
            $cart_info = [];
            $cart_info["goods_id"] = $goods_data['goods_id'];
            $cart_info["goods_num"] = $goods_data['goods_num'];
            $cart_cookies = $request->session()->put('cartinfo', $cart_info);
        }
    }
    //删除商品
    public function Delshop(Request $request) {
       $goods_id = $request->all();
       //先查询
       $goods_info = $request->session()->get("cartinfo");
       if($goods_info['goods_id'] == $goods_id['goods_id']); {
            //删除seesion
            $del = $request->session()->forget('cartinfo');
            if($del == null) {
                echo 1;
            }
       }
    }
}
