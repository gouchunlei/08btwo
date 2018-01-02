<?php
namespace app\index\controller;

use think\Controller;

class Marketing extends Controller{
	// 评论列表
	public function index()
	{
		return $this->fetch('product');
	}
	// 评论分类
	public function add()
	{
		return $this->fetch('product_category');
	}
}