<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
    	// echo 1;
        return $this->fetch('index');
    }

    public function main()
    {
    	// echo 1;
        return $this->fetch('main');
    }
    
}
