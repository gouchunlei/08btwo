<?php

namespace app\index\controller;

use think\Controller;

class Vip extends Controller{

	// 会员
	public function index()
	{
		return $this->fetch('vip');
	}

	public function vipadd()
	{
		return $this->fetch('vipadd');
	}

	public function vipadd2()
	{
		return $this->fetch('vipadd2');
	}

	public function vipreset()
	{
		return $this->fetch('vipreset');
	}
}