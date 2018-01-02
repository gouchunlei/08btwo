<?php
namespace app\index\controller;

use think\Controller;

class Goods extends Controller{
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
	// 添加商品
	public function add()
	{
		// echo 1;
		return $this->fetch('addproduct');
	}
}