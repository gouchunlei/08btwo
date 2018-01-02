<?php

namespace app\index\controller;

use think\Controller;

class Cupon extends Controller{
	// 展示红包
	public function index()
	{
		// echo 1;
		return $this->fetch('cupon');
	}
}