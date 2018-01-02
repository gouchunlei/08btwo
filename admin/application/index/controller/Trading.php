<?php
namespace app\index\controller;

use think\Controller;

class Trading extends Controller{

	// 交易记录
	public function index()
	{
		return $this->fetch('trading');
	}

	public function tradingadd()
	{
		return $this->fetch('tradingadd');
	}

	public function tradingupdate()
	{
		return $this->fetch('tradingupdate');
	}
}