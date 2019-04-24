<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($_site['name']); ?> -- 首页</title>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<link rel="stylesheet" type="text/css" href="/Public/home/css/common.css">
<link rel="stylesheet" type="text/css" href="/Public/home/css/index.css">
<link rel="stylesheet" href="/Public/home/css/reset.css">
<link rel="stylesheet" href="/Public/home/css/idangerous.swiper.css"> 
<link rel="stylesheet" href="/Public/layer/skin/layer.css" type="text/css" />

<script src="/Public/home/js/jquery-1.10.1.min.js"></script>
<script src="/Public/bootstrap-3.3.5/js/bootstrap.js"></script>
<script src="/Public/layer/layer.js" type="text/javascript"></script>
	
<style>
header {
	height: 60px;
	background-color: #f5f5f5;
	position: fixed;
	width: 100%;
	z-index: 9999;
	display: -webkit-box;
	top: 0;
}
body{margin:0;font-family:"microsoft yahei";font-size:13px;line-height:1.5;background:#F2F2F2}
.wrap{margin:50px auto 0 auto;}
.tabs{height:40px;padding-left: 50px;}
.tabs a{display:block;float:left;width:13.66%;color:#333;text-align:center;line-height:40px;font-size:16px;text-decoration:none;}
.tabs a.active{color:#D13F42;border-radius:5px 5px 0px 0px;border-bottom:3px solid #D13F42}
.swiper-container{height:205px;border-radius:0 0 5px 5px;width:100%;border-top:0;}
.swiper-slide{height:205px;width:100%;background:none;color:#fff;}
.content-slide p{text-indent:2em;line-height:1.9;}
.cityBtn2 {
	width: 60px;
	height: 100%;
	line-height: 50px;
	text-align: center;
	color: white;
	top: 0;
	left: 0;
	font-size: 14px;
	margin-left: 3%;
	margin-top: 2%;
}
.swiper-slide img{height:205px;}
.sy_recmd_list_box {
    padding-top: 0;
	margin-bottom: 50px;
    background-color: #F2F2F2;
}
</style>
</head>

<body>
<header class="hasManyCity" id="header">
	<div class="cityBtn2"><img src="<?php echo ($_site['pic']); ?>" style="width: 85%;" onclick="window.location.href=&#39;<?php echo U('Mh/index');?>&#39;"></div>
	<div id="locaitonBtn" class="link-url locaitonBtn" onclick="window.location.href=&#39;<?php echo U('Index/cart');?>&#39;"></div>

	
	<div class="custom-search" style="margin-left: 2%;">
		<form action="<?php echo U('Index/index');?>" method="get">
			<input type="text"  class="searchBox" placeholder="搜索热门课程" id="keyword" name="keyword" />
		</form>
	</div>
	<div class="qrcodeBtn" onclick="window.location.href=&#39;<?php echo U('Index/notice');?>&#39;"></div>
</header>
<div id="container">		
	<div id="main">

					
		<div id="index" class="page-center-box">
			<div>

				<div class="wrap">
					
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php if(is_array($banner)): foreach($banner as $k=>$v): ?><div class="swiper-slide">
								<div class="content-slide">
									<a href="<?php echo ($v['url']); ?>"><img src="<?php echo ($v['pic']); ?>"></a>
								</div>
							</div><?php endforeach; endif; ?>
							
						</div>
					</div>
				</div>
				<script type="text/javascript" src="/Public/home/js/idangerous.swiper.min.js"></script>
				<script type="text/javascript">
					var tabsSwiper = new Swiper('.swiper-container',{
						speed:500,
						onSlideChangeStart: function(){
							$(".tabs .active").removeClass('active');
							$(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
						}
					});

					$(".tabs a").on('touchstart mousedown',function(e){
						e.preventDefault()
						$(".tabs .active").removeClass('active');
						$(this).addClass('active');
						tabsSwiper.swipeTo($(this).index());
					});

					$(".tabs a").click(function(e){
						e.preventDefault();
					});
				</script>
				<div class="sy_recmd" style="margin-top: 10px;">
					<div class="sy_recmd_list_box">
						<ul id="goods">
						
						</ul>
						<div class="clear" style="margin-bottom: 15px"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="/Public/layer/skin/layer.css">
<script src="/Public/home/js/jquery-1.10.1.min.js"></script>
<script src="/Public/layer_mobile/layer.js"></script>
<script src="/Public/home/js/swiper.min.js"></script>
<script src="/Public/home/js/common.js"></script>
<script>
	var page = 1;
	var keyword ="<?php echo ($_GET['keyword']); ?>";
	loadData();
	function loadData(){
		AjaxLoad("<?php echo U('Index/getGoods');?>",{page:page,keyword:keyword},$('#goods'),false,loadData,true);
	}
</script>		
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