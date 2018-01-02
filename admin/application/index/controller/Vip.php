<?php

namespace app\index\controller;

use think\Controller;

class Vip extends Controller{

	// 会员
	public function index()
	{
		return $this->fetch('manager');
	}

	// 列表
	public function log()
	{
		return $this->fetch('manager_log');
	}
}