<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
	// 查询红包数据
    public function getCupon()
    {
        return DB::table('su_cupon')->get()->toArray();
    }

    // 用户注册成功赠送红包
    public function giveCupon($uid)
    {
    	// $uid
    	$data = $this->getCupon();
        $data = json_decode(json_encode($data),true);
        
    	foreach ($data as $k=>$v){
    		if ($v['cn_money'] == 10) {
               $arr['cn_id'] = $v['cn_id'];
               $arr['u_start'] = date('Y-m-d H:i:s');
               $arr['money'] = $v['cn_money'];
               $arr['cu_min'] = 100;
               $arr['u_id'] = $uid;
                $res = DB::table('su_user_cupon')->insert($arr);
                if ($res) {
                   return DB::table('su_cupon')->where('cn_money', 10)->update(array('cu_num' => $v['cu_num']-1));
               }
                }
            
    	}
    	
        
    }

    // 用户红包信息展示
    public function getInfo($uid)
    {
        return $uid;

    }
}
