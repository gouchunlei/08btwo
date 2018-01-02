<?php

namespace app\index\controller;

use think\Controller;

class Order extends Controller{

	public function index()
	{
		return $this->fetch('order');
	}

	public function orderadd()
	{
		return $this->fetch('orderadd');
	}

	public function orderupdate()
	{
		return $this->fetch('orderupdate');
	}

}