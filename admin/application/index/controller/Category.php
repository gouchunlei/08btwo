<?php

namespace app\index\controller;

use think\Controller;

class Category extends Controller{
	// 分类
	public function index()
	{
		// 页面渲染
		return $this->fetch('category');
	}
	// 分类添加
	public function categoryadd()
	{
		return $this->fetch('categoryadd');
	}

	// 分类修改
	public function categoryupdate()
	{
		return $this->fetch('categoryupdate');
	}
}