<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\sugoo\admin\public/../application/index\view\attr\attr.html";i:1515486966;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="__CSS__public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__JS__jquery.min.js"></script>
<script type="text/javascript" src="__JS__global.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="__IMG__dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
     <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">评论</a> <a href="show.html">首页幻灯</a>  <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
    </li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="<?php echo url('index/index/index'); ?>"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/system/index'); ?>"><i class="system"></i><em>系统设置</em></a></li>
  <li><a href="<?php echo url('index/show/index'); ?>"><i class="show"></i><em>首页幻灯广告</em></a></li>
 </ul>
   <ul>
  <li><a href="<?php echo url('index/goods/index'); ?>"><i class="productCat"></i><em>商品管理</em></a></li>
 </ul>
  <ul>
  <li><a href="<?php echo url('index/Category/index'); ?>"><i class="productCat"></i><em>商品分类</em></a></li>
 </ul>
  <ul>
  <li><a href="<?php echo url('index/attr/index'); ?>"><i class="productCat"></i><em>商品属性</em></a></li>
 </ul>
  <ul>
  <li><a href="<?php echo url('index/brand/index'); ?>"><i class="productCat"></i><em>商品品牌</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/vip/index'); ?>"><i class="productCat"></i><em>会员管理</em></a></li>
  <li><a href="<?php echo url('index/vip/log'); ?>"><i class="product"></i><em>会员列表</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/order/index'); ?>"><i class="productCat"></i><em>订单管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/logistics/index'); ?>"><i class="productCat"></i><em>物流管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/trading/index'); ?>"><i class="productCat"></i><em>交易管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/pay/index'); ?>"><i class="productCat"></i><em>支付管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/money/index'); ?>"><i class="productCat"></i><em>平台资金管理</em></a></li>
 </ul>
 <ul>
  <li><a href="<?php echo url('index/marketing/index'); ?>"><i class="productCat"></i><em>营销管理</em></a></li>
 </ul>
  <ul>
  <li><a href="<?php echo url('index/talk/index'); ?>"><i class="productCat"></i><em>评论管理</em></a></li>
 </ul>
   <ul class="bot">
  <li><a href="<?php echo url('index/Manager/index'); ?>"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="<?php echo url('index/Manager/log'); ?>"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>品牌列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo url('index/brand/add'); ?>" class="actionBtn add">添加品牌</a>品牌列表</h3>
    <div class="filter">
    <form action="product.php" method="post">
     <select name="cat_id">
      <option value="0">未分类</option>
                  <option value="1"> 电子数码</option>
                        <option value="4">- 智能手机</option>
                        <option value="5">- 平板电脑</option>
                        <option value="2"> 家居百货</option>
                        <option value="3"> 母婴用品</option>
                 </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
    <a class="btnGray" href="product.php?rec=re_thumb">更新商品缩略图</a>
        <a class="btnGray" href="product.php?rec=sort">开始筛选首页商品</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="40" align="center">编号</th>
        <th align="left">商品名称</th>
        <th width="150" align="center">商品分类</th>
       <th width="80" align="center">添加日期</th>
        <th width="80" align="center">操作</th>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td>
        <td align="center">15</td>
        <td><a href="product.php?rec=edit&id=15">亨氏Heinz金装粒粒面鳕鱼胡萝卜面</a></td>
        <td align="center"><a href="product.php?cat_id=3">母婴用品</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=15">编辑</a> | <a href="product.php?rec=del&id=15">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="14" /></td>
        <td align="center">14</td>
        <td><a href="product.php?rec=edit&id=14">PES宽口套装奶瓶</a></td>
        <td align="center"><a href="product.php?cat_id=3">母婴用品</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=14">编辑</a> | <a href="product.php?rec=del&id=14">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="13" /></td>
        <td align="center">13</td>
        <td><a href="product.php?rec=edit&id=13">法国合生元奶粉</a></td>
        <td align="center"><a href="product.php?cat_id=3">母婴用品</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=13">编辑</a> | <a href="product.php?rec=del&id=13">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="12" /></td>
        <td align="center">12</td>
        <td><a href="product.php?rec=edit&id=12">Pampers帮宝适超薄干爽纸尿裤</a></td>
        <td align="center"><a href="product.php?cat_id=3">母婴用品</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=12">编辑</a> | <a href="product.php?rec=del&id=12">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="11" /></td>
        <td align="center">11</td>
        <td><a href="product.php?rec=edit&id=11">客厅吸顶灯</a></td>
        <td align="center"><a href="product.php?cat_id=2">家居百货</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=11">编辑</a> | <a href="product.php?rec=del&id=11">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="10" /></td>
        <td align="center">10</td>
        <td><a href="product.php?rec=edit&id=10">实木餐桌</a></td>
        <td align="center"><a href="product.php?cat_id=2">家居百货</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=10">编辑</a> | <a href="product.php?rec=del&id=10">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="9" /></td>
        <td align="center">9</td>
        <td><a href="product.php?rec=edit&id=9">衣物收纳箱</a></td>
        <td align="center"><a href="product.php?cat_id=2">家居百货</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=9">编辑</a> | <a href="product.php?rec=del&id=9">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="8" /></td>
        <td align="center">8</td>
        <td><a href="product.php?rec=edit&id=8">创意沙发</a></td>
        <td align="center"><a href="product.php?cat_id=2">家居百货</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=8">编辑</a> | <a href="product.php?rec=del&id=8">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="7" /></td>
        <td align="center">7</td>
        <td><a href="product.php?rec=edit&id=7">MacBook Air笔记本电脑</a></td>
        <td align="center"><a href="product.php?cat_id=1">电子数码</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=7">编辑</a> | <a href="product.php?rec=del&id=7">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="6" /></td>
        <td align="center">6</td>
        <td><a href="product.php?rec=edit&id=6">BlackBerry黑莓9780</a></td>
        <td align="center"><a href="product.php?cat_id=4">智能手机</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=6">编辑</a> | <a href="product.php?rec=del&id=6">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="5" /></td>
        <td align="center">5</td>
        <td><a href="product.php?rec=edit&id=5">ThinkPad笔记本电脑</a></td>
        <td align="center"><a href="product.php?cat_id=1">电子数码</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=5">编辑</a> | <a href="product.php?rec=del&id=5">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="4" /></td>
        <td align="center">4</td>
        <td><a href="product.php?rec=edit&id=4">Amazon Kindle电子书阅读器</a></td>
        <td align="center"><a href="product.php?cat_id=5">平板电脑</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=4">编辑</a> | <a href="product.php?rec=del&id=4">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="3" /></td>
        <td align="center">3</td>
        <td><a href="product.php?rec=edit&id=3">魅族MX2智能手机</a></td>
        <td align="center"><a href="product.php?cat_id=1">电子数码</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=3">编辑</a> | <a href="product.php?rec=del&id=3">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="2" /></td>
        <td align="center">2</td>
        <td><a href="product.php?rec=edit&id=2">苹果iPhone 5手机</a></td>
        <td align="center"><a href="product.php?cat_id=4">智能手机</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=2">编辑</a> | <a href="product.php?rec=del&id=2">删除</a>
                 </td>
      </tr>
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="1" /></td>
        <td align="center">1</td>
        <td><a href="product.php?rec=edit&id=1">iPad平板电脑</a></td>
        <td align="center"><a href="product.php?cat_id=5">平板电脑</a></td>
        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="product.php?rec=edit&id=1">编辑</a> | <a href="product.php?rec=del&id=1">删除</a>
                 </td>
      </tr>
          </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                  <option value="1"> 电子数码</option>
                        <option value="4">- 智能手机</option>
                        <option value="5">- 平板电脑</option>
                        <option value="2"> 家居百货</option>
                        <option value="3"> 母婴用品</option>
                 </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 15 个记录，共 1 页，当前第 1 页 | <a href="product.php?page=1">第一页</a> 上一页 下一页 <a href="product.php?page=1">最末页</a></div>               </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
<script type="text/javascript">

onload = function()
{
 document.forms['action'].reset();
}

function douAction()
{
 var frm = document.forms['action'];
 frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
}

</script>
</body>
</html>
