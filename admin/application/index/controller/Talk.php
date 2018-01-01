<?php

namespace app\index\controller;

use think\Controller;

class Talk extends Controller{
	// 评论
	public function index()
	{
		return $this->fetch('talk');
	}
}