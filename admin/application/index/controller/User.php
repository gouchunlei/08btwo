<?php

namespace app\index\controller;

use think\Controller;

class User extends Controller{

	public function user()
	{
		return $this->fetch('user');
	}

	public function userAdd()
	{
		return $this->fetch('useradd');
	}

	public function userupdate()
	{
		return $this->fetch('userupdate');
	}
}