<?php

namespace app\index\controller;

use think\Controller;

class Show extends Controller{

	// 幻灯片
	public function index()
	{
		// echo 1;
		return $this->fetch('show');
	}
}