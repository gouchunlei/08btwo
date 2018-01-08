<?php
namespace app\index\controller;

use think\Controller;
use \think\Request;
use app\index\model\CuponModel;
use think\Session;
class Cupon extends Controller{

	// 红包展示
	public function index()
	{
		
		$page = isset($_GET['p']) ? $_GET['p'] : 1;
		
		// 实例化红包模型
		$cupon= new CuponModel();

		$data = $cupon->getCupon($page);
		
		return $this->fetch('cupon',['page_info'=>$data['page_info'],'page_str'=>$data['page_str']]);
	}

	// 红包添加
	public function add()
	{
		$request = request();

		$cupon= new CuponModel();
		
		if ($request->isPost()) {

			$data = $request->instance()->param();
			// echo "<pre>";
			// print_r($data);die;

			$cu_number = time().uniqid().rand(10000,99999);

			$cu_start = date('Y-m-d H:i:s',time());

			$data['cu_number'] = $cu_number;

			$data['cu_start'] = $cu_start;

			$res = $cupon->cuponAdd($data);

			if ($res) {
           
            $this->success('新增成功', 'Cupon/index');

        	} else {
            
             $this->error('新增失败');

        	}

		}else{

			return $this->fetch('addcupon');

		}
		
	}

	public function audit()
	{
		$request = request();

		$data = $request->instance()->param();

		$id = $data['cu_id'];

		$data['ca_time'] = date('Y-m-d H:i:s',time());
		
		$arr['cn_money']=$data['ca_money'];

		$arr['cu_id']=$data['cu_id'];

		$arr['cu_num']=$data['cu_num'];


		//判断审核状态
		if ($data['ca_status'] == 0) {

			$cupon= new CuponModel();

			$res = $cupon->auditCupon($id,$data['ca_time']);

			if ($res) {

				$cupon->auditAdd($data);

				$cupon->cuAdd($arr);

				echo json_encode(['code'=>1,'msg'=>'审核通过']);

			} else {

				echo  json_encode(['code'=>2,'msg'=>"审核失败"]);

			}

		} else {

			echo json_encode(['code'=>0,'msg'=>"已审核"]);

		}

	}

	public function del()
	{
		$request = request();

		$id = $request->instance()->param('id');

		$page = isset($_GET['p']) ? $_GET['p'] : 1;

		$cupon= new CuponModel();

		$res = $cupon->cuponDel($id);	
		
		if ($res) {

			$data = $cupon->getCupon($page);

			echo json_encode([
				'code'=>1,
				'page_str'=>$data['page_str'],
        	    'page_info'=>$data['page_info']
        	    ]
        	    );

		}else{
			echo json_encode(['code'=>0]);
		}

	}

	// 批量删除
	public function dels()
	{
		$request = request();

		$id = $request->instance()->param('id');

		$page = isset($_GET['p']) ? $_GET['p'] : 1;
		
		$cupon= new CuponModel();

		$res = $cupon->cuponDels($id);

		if ($res) {

			$data = $cupon->getCupon($page);

			echo json_encode([
				'code'=>1,
				'page_str'=>$data['page_str'],
        	    'page_info'=>$data['page_info']
        	    ]
        	    );

		}else{
			echo json_encode(['code'=>0]);
		}

	}

	// 分页
	public function do_index()
	{
		$page = isset($_GET['p']) ? $_GET['p'] : 1;

        $cupon= new CuponModel();

		$data = $cupon->getCupon($page);

        echo json_encode([
        	'page_str'=>$data['page_str'],
        	'page_info'=>$data['page_info']
        	]);

	}

	public function userCupon()
	{
		Session::set('name','thinkphp');
		echo isset($_GET['p']) ? $_GET['p'] :1;
	}




}