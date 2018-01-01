<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
	// 登录展示
    public function log()
    {	
    	return $this->fetch('log');
    }

    
}
