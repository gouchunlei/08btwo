@extends('layout.pro_main')

@section('content')
<!--End Menu End-->
<div class="i_bg">  
    <div class="content mar_20">
    	<img src="images/img1.jpg" />        
    </div>
    
    <!--Begin 第一步：查看购物车 Begin -->
    <div class="content mar_20">
    	<table border="0" class="car_tab" style="width:1200px; margin-bottom:50px;" cellspacing="0" cellpadding="0">
          <tr>
            <td class="car_th" width="490">商品名称</td>
            <td class="car_th" width="140">属性</td>
            <td class="car_th" width="150">购买数量</td>
            <td class="car_th" width="130">小计</td>
            <td class="car_th" width="130">总计</td>
            <td class="car_th" width="150">操作</td>
          </tr>
          <tr class="car_tr">
            <td>
            	<div class="c_s_img"><img src="images/c_4.jpg" width="73" height="73" /></div>
                Rio 锐澳 水蜜桃味白兰地鸡尾酒（预调酒） 275ml
            </td>
            <td align="center">颜色：灰色</td>
            <td align="center">
            	<div class="c_num">
                    <input type="button" value="" onclick="jianUpdate1(jq(this));" class="car_btn_1" />
                	<input type="text" value="1" name="" class="car_ipt" />  
                    <input type="button" value="" onclick="addUpdate1(jq(this));" class="car_btn_2" />
                </div>
            </td>
            <td align="center" style="color:#ff4e00;" >￥<span id="price">620.00</span></td>
            <td align="center" style="color:#ff4e00;" >￥<span id="totalprice">620.00</span></td>   
            <td align="center"><a onclick="delshop()">删除</a>&nbsp; &nbsp;<a href="#">加入收藏</a></td>
          </tr>
          <tr height="70">
          	<td colspan="6" style="font-family:'Microsoft YaHei'; border-bottom:0;">
                <span class="fr">商品总价：<b style="font-size:22px; color:#ff4e00;">￥2899</b></span>
            </td>
          </tr>
          <tr valign="top" height="150">
          	<td colspan="6" align="right">
            	<a href="index"><img src="images/buy1.gif" /></a>&nbsp; &nbsp; <a href="car_two"><img src="images/buy2.gif" /></a>
            </td>
          </tr>
        </table>
        
    </div>
	<!--End 第一步：查看购物车 End--> 
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script>
  function delshop() {
    var goods_id = 1;
      $.ajax({
          url:"Car/Delshop",
          type:"get",
          data:{"goods_id":goods_id},
          success:function(msg) {
            if(msg == "1") {
              $(".car_tr").remove();
            }
          }
      });
    }
    $(".car_btn_1").click(function(){
      var num = $(".car_ipt").val();
      var price = $("#price").html();
      var total = num*price; 
      $("#totalprice").html(total);
    })
    $(".car_btn_2").click(function(){
      var num = $(".car_ipt").val();
      var price = $("#price").html();
      var total = num*price; 
      $("#totalprice").html(total);
    })
    $(".car_ipt").blur(function(){
      var num = $(".car_ipt").val();
      var price = $("#price").html();
      var total = num*price; 
      $("#totalprice").html(total);
    })
</script>
   @endsection