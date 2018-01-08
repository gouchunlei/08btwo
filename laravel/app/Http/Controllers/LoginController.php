<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use \App\Login;
use Request,Redirect,Session;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
	//登录
    public function index()
    {
    	return view('login.login');
    }

    //用户登录验证
    public function loginDo(){
        $input=Request::all();
        $login = new Login;
        $res = $login->loginCheck($input);
        if($res['error'] == '200'){
            return Redirect::to('index');
        }else{
            return Redirect::to('login');
        }
    }


    //注册
    public function regis()
    {
    	return view('login.regist');
    }

    //添加用户信息验证
    public function addUser(){
        $input=Request::all();
        $login = new Login;
        $back = $login->checkUserMsg($input);
        // if($back['error'] == '200')
        // {
        //     $uid = session('uid');
        //     $userCopon = new userCopon;
        //     $userCopon->give($uid);
        // }
        return json_encode($back);
    }

    //手机验证码
    public function flash(){
        $phone=Request::get('phone');
        $login = new Login;
        return json_encode($login->sendFlash($phone));
    }

    //第三方登陆 qq
    public function qqLogin()
    {
        $code_url="https://graph.qq.com/oauth2.0/authorize";
        $params=[
             'response_type'=>'code',
             'client_id'=>'101401704',
             'redirect_uri'=>urlencode('http://sggcl.hk1.mofasuidao.cn/sugoo/laravel/public/getCode'),
             'state'=>uniqid(),
             'scope'=>'get_user_info'
        ];
        $Code=$code_url.'?'.http_build_query($params);
        echo $Code;
    }


}
