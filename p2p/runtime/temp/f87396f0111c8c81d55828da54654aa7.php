<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\phpstudy\WWW\git\public/../application/index\view\myself\realname.html";i:1512174729;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no,email=no,adress=no"/>
<title>首页</title>
<link rel="stylesheet" type="text/css" href="__CSS__/setting.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script src="__JS__/setting.js"></script>
</head>
<body>
<!-- 页面头部 -->
<section>
  <div class="navigation-bar"> <a href="#" class="z-01"></a> <span>实名认证</span> <a href="#" class="z-02"></a> </div>
</section>
<!-- 中间内容 -->
<div class="m-wrapper">
  <div class="wrapper   ">
    <div class="login-password real-name">
      <div class="container-fluid">
        <form class="login-form2" id="set-real-name" onSubmit="return false;">
          <div class="form-group item">
            <input type="text" class="form-control input-lg rel-name login-input" name="real-name" tabindex="1" placeholder="请输入真实姓名" value="">
          </div>
          <div class="form-group item">
            <input type="text" class="form-control card-id input-lg" name="card-id" tabindex="2" placeholder="请输入身份证号" value="">
          </div>
          <div class="tip-info">
            <p class="text-left ui-fs-12 text-nowrap">请仔细确认，认证后的账号不能修改认证信息</p>
          </div>
          <div class="form-group">
            <button type="submit" data-toggle="modal" class="waves-button form-control login-button input-lg  default waves-effect waves-effect" tabindex="4" id="btn-real-name">确定</button>
          </div>
        </form>
		<div>
          <p class="text-center ui-fs-12 text-nowrap">若您无法通过该方式重设手机号码，请联系客服电话</p>
          <p class="text-center ui-fs-12 text-nowrap"><span>400-090-1268</span></p>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- 页面底部 -->
<nav class="footer border_t" id="footer"> <a href="index.html" class="" id="jx"><span></span>首页</a> <a href="list.html" id="lc" class="nav_on"><span></span>理财</a> <a href="#" id="jk" class=""><span></span>借款</a> <a href="个人中心.html" id="cf" class=""><span></span>我的账户</a> </nav>
</body>
</html>
