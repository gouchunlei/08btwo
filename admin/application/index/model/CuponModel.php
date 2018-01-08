<?php

namespace app\index\model;

use think\Model;
use think\Db;
class CuponModel extends Model
{
	// 红包添加
	public function cuponAdd($data)
	{
		
		return Db::table('su_cupon_batch')->insert($data);

	}

	// 获取红包数据
	public function getCupon($page)
	{
		// 每页显示条数
		$size = 3;
		
		// 总条数
		$count= Db::table('su_cupon_batch')->count();

		// 总页数
		$end = ceil($count/$size);

        //偏移量
        $offset = ($page-1) * $size;

        // 分页数据
        $page_info = Db::table('su_cupon_batch')->order('cu_id asc')->limit($offset,$size)->select();

		$prev = $page-1<1 ? 1 : $page-1;

        $next = $page+1>$end ? $end : $page+1;

		$page_str = [
		"first"=>1,
		"pre"=>$prev,
		"next"=>$next,
		"page"=>$page,
		"end"=>$end,
		"count"=>$count
		];

		$arr = ['page_str'=>$page_str,'page_info'=>$page_info];
		return $arr;


	}

	// 审核红包
	public function auditCupon($id,$time)
	{
		
		return Db::table('su_cupon_batch')->where('cu_id', $id)->update(['audit_status' => 1,'audit_time'=>$time]);

	}

	// 审核红包记录
	public function auditAdd($data)
	{
		
		return Db::table('su_cupon_audit')->insert($data);

	}

	// 红包添加
	public function cuAdd($arr)
	{
		
		return Db::table('su_cupon')->insert($arr);

	}
	// 删除红包
	public function cuponDel($id)
	{
		
		return Db::table('su_cupon_batch')->delete($id);

	}

	// 批量删除红包
	public function cuponDels($id)
	{
		
		return Db::table('su_cupon_batch')->delete($id);

	}

	

	
}