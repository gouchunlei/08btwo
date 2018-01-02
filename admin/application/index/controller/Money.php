<?php

namespace app\index\controller;

use think\Controller;

class Money extends Controller{

	// 账户金额展示
	
	public function index()
	{
		return $this->fetch('money');
	}
}