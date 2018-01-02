<?php

namespace app\index\controller;

use think\Controller;

class Brand extends Controller{
	// 分类
	public function index()
	{
		// echo 1;
		return $this->fetch('product_category');
	}

	// 列表
	public function product()
	{
		// echo 1;
		return $this->fetch('product');
	}

}