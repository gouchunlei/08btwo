<?php

namespace app\index\controller;

use think\Controller;

class Brand extends Controller{
	// 品牌
	public function index()
	{
		return $this->fetch('brand');
	}

	// 品牌添加
	public function brandadd()
	{
		return $this->fetch('brandadd');
	}

	// 品牌修改
	public function brandupdate()
	{
		return $this->fetch('brandupdate');
	}
}