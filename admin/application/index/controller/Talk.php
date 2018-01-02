<?php

namespace app\index\controller;

use think\Controller;

class Talk extends Controller{
	// 评论列表
	public function index()
	{
		return $this->fetch('article');
	}
	// 评论分类
	public function add()
	{
		return $this->fetch('article_category');
	}
}