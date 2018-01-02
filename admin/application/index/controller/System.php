<?php

namespace app\index\controller;

use think\Controller;

class System extends Controller{

	// 修改密码
	public function index()
	{
		return $this->fetch('changepwd');
	}
}