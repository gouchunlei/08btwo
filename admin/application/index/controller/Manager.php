<?php
namespace app\index\controller;

use think\Controller;

class Manager extends Controller{
	//
	public function index()
	{
		// echo 1;
		return $this->fetch('manager');
	}

	public function log()
	{
		return $this->fetch('manager_log');
	}

	public function add()
	{
		return $this->fetch('addmanager');
	}
}