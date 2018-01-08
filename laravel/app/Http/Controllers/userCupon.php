<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cupon;
class userCupon extends Controller
{
    public function give(Request $request)
    {
    	
    	$uid =$request->input('u_id'); 
    	$uid = isset($uid) ? $uid : 1;

    	$c = new Cupon();
    	$data = $c->giveCupon($uid);
    	if ($data) {
    	return json_encode(['code'=>1,'msg'=>'恭喜您获得1个价值十元的红包']);
    	}else{
    	return json_encode(['code'=>2,'msg'=>'您已经领取过']);
    	}
    }

    // 红包信息以及多条件查询
    public function getinfo(Request $request)
    {
    	$uid = $request->session()->get('u_id');
    	$uid = isset($uid )?$uid:1;
    	$c = new Cupon();
    	$data = $c->getInfo($uid);
    	echo $uid;
    	
    }
    
    
    
}
