<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no, address=no">
<title><?php echo ($_site['name']); ?></title>
<link rel="stylesheet" type="text/css" href="/Public/ever/css/common.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/app.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/font.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/designer.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/index.css">
<body bgcolor="#f2f2f2">

<style>
.pay-loading{ text-align:center;display:none;margin-top: 20px;}
.pay-loading img{ width:30px; height:30px;}
.bottom{height:60px!important;}
</style>
<div class="common-header">
	<i class="iconfont icon-back" onclick="javascript:history.go( - 1)"></i>
	<h3>我的课程</h3>
</div>
<div class="order-list" id="orders">
	
	
</div>
<div style="clear:both;height:70px;"></div>
<link rel="stylesheet" href="/Public/layer/skin/layer.css">
<script src="/Public/home/js/jquery-1.10.1.min.js"></script>
<script src="/Public/layer_mobile/layer.js"></script>
<script src="/Public/home/js/common.js"></script>
<script type="text/javascript">
	var page = 1;
		html = false;
	loadOrder();

	//加载评论
	function loadOrder(){
		AjaxLoad("<?php echo U('Ucenter/getOrder');?>",{page:page},$('#orders'),html,loadOrder);
	}
</script>
<div id="backtop"><i class="iconfont icon-fold"></i></div>
<!-- <footer id="footer">
			<div>
				<a href="<?php echo U('Index/index');?>">
					<div class="icon i-1 on"></div>
					<p>首页</p>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="icon i-2"></div>
					<p>预存</br>代理</p>
				</a>
			</div>
			<div>
				<a href="rush.html">
					<div class="icon i-status" style="position: relative;top: -22px;"></div>
				</a>
			</div>
			<div>
				<a href="<?php echo U('Index/applyT');?>">
					<div class="icon i-3"></div>
					<p>申请</br>讲师</p>
				</a>
			</div>
			<div>
				<a href="<?php echo U('Ucenter/index');?>">
					<div class="icon i-4"></div>
					<p>个人</br>中心</p>
				</a>
			</div>			
		</footer>	 -->	

<style>

.bottom {
    background: #64BDB7;
    width: 100%;
    height: 50px;
    position: fixed;
    bottom: 0px;
    left: 0px;
    z-index: 100;
    padding: 5px 0px;
	color:#fff;
    box-shadow: 0px 0px 8px #c1c1c1;
}
.bottom a {
    font-size: 12px;
    font-weight: 500;
    color: #333333;
    width: 25%;
    float: left;
    text-align: center;
    padding-top: 30px;
    line-height: 30px;
	color:#fff;
}
.bottom .f1{
	background: url(./Public/images/f1.png) no-repeat top center;
    background-size: 30px 30px;
}
.bottom .f2{
	background: url(./Public/images/f2.png) no-repeat top center;
    background-size: 40px 30px;
}
.bottom .f3{
	background: url(./Public/images/f3.png) no-repeat top center;
    background-size: 30px 30px;
}
.bottom .f4{
	background: url(./Public/images/f4.png) no-repeat top center;
    background-size: 30px 30px;
}
.bottom span{
	display: block;
    height: 60px;
    width: 1px;
    background: #ddd;
    left: 50%;
    position: fixed;
    bottom: .5px;
}
</style>
<div class="bottom">
	<a href="<?php echo U('Index/index');?>" class="f1">首页</a>
	<a href="<?php echo U('Ucenter/myGoods');?>"  class="f2">我的课程</a>
	<a href="<?php echo U('Index/applyT');?>"  class="f3">申请讲师</a>
	<a href="<?php echo U('Ucenter/index');?>"  class="f4">个人中心</a>
</div>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
var links = window.location.href+'&parent='+"<?php echo ($user["id"]); ?>";
var img = "<?php echo ($share["pic"]); ?>";
var title = "<?php echo ($share["title"]); ?>";
var desc = "<?php echo ($share["desc"]); ?>";
wx.config({
	debug: false,
	appId: "<?php echo ($jssdk['appId']); ?>",
	timestamp:"<?php echo ($jssdk['timestamp']); ?>",
	nonceStr: "<?php echo ($jssdk['nonceStr']); ?>",
	signature: "<?php echo ($jssdk['signature']); ?>",
	jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage']
});
wx.ready(function () {
	wx.checkJsApi({
		jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
		success: function(res) {
			//alert(JSON.stringify(res));
		}
	});
	wx.error(function(res){
		console.log('err:'+JSON.stringify(res));
	});
	//分享给朋友
	wx.onMenuShareAppMessage({
		title:title, // 分享标题
		desc:desc, // 分享描述
		link:links, // 分享链接
		imgUrl:img, // 分享图标
		type: 'link', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function () { 
		},
		cancel: function () { 
			
		}
	});
	//分享到朋友圈
	wx.onMenuShareTimeline({
		title:title, // 分享标题
		link: links, // 分享链接
		imgUrl:img, // 分享图标
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
});
</script>
<?php echo ($_CFG["site"]["thirdcode"]); ?>
</html>