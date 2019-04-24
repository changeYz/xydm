<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($_site['name']); ?> -- 个人中心</title>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<link rel="stylesheet" type="text/css" href="/Public/home/css/common.css">
<link rel="stylesheet" type="text/css" href="/Public/home/css/index.css">
<link rel="stylesheet" type="text/css" href="/Public/home/css/mui.min.css"/>
<link rel="stylesheet" href="/Public/home/css/reset.css">
<style>
#container{font-weight: bold}
.h-top {
	width: 100%;
	background-color: #ffffff;
	padding: 5% 5% 5% 15%;
	position: relative;
}
.cash-tit {
	width: 100%;
	height: .2rem;
	line-height: .2rem;
	border-bottom: 1px solid #DDD8CD;
	font-size: .15rem;
	padding: 0 3%;
	background: #F8F9FA;
}
.h-top .content p {
	color: #000;
	line-height: .25rem;
}
a.center-btn {
	background-color: #00A3E4;
	color: #fff;

}
.zw{
    background: #00a2d4;
    height: 25px;
    border-radius: 6px;
    display: -webkit-inline-box;
    font-size: 18px;
    padding-left: 5px;
    padding-top: 3px;
    padding-right: 5px;
}
.hname{height: 30px;font-size: 14px;}
.htel{height: 30px;font-size: 20px;}
.c-blue{color: #00a0e9!important;font-size: 16px!important; }
.c-ml{height: 25px;    padding-top: 5px;}
.bottom{height:60px!important;}
</style>
</head>
<body>
	<!--header end-->
	<div id="container">		
		<div id="main">
			<div class="warp clearfloat">
				<div class="h-top clearfloat box-s">
					<div class="tu clearfloat fl">
						<img src="<?php echo ($user['headimg']); ?>"/>
					</div>
					<div class="content clearfloat fl">
						<div class="hname"><?php echo getUserName($user['id']);?>，您好</div>
						<div class="htel">职务：<div class="zw"><?php echo get_level_lv_name($user['level'],$user['lv']);?></div></div>
					</div>

				</div>
				<div class="cash clearfloat" >
					<div class="cash-tit clearfloat box-s"></div>
					<div class="shang xia clearfloat">
						<ul>
							<li>
								<a href="<?php echo U('Index/index');?>">
									<img src="/Public/home/images/sy.png"/>
									<span>首页课堂</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/myTeam');?>">
									<span class="c-ml">我的班级米粒</span>
									<span class="c-blue"><?php echo sprintf("%.2f",$myson_money);?></span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/myMl');?>">
									<span class="c-ml">我的米粒</span>
									<span class="c-blue"><?php echo sprintf("%.2f",$user['money']);?></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="cash clearfloat" style="margin-bottom: 10%">
					<div class="cash-tit clearfloat box-s"></div>
					<div class="shang xia clearfloat">
						<ul>
							<li>
								<a href="<?php echo U('Ucenter/profile');?>">
									<img src="/Public/home/images/gr.png" width="35" height="35"/>
									<span>个人中心</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/myGoods');?>">
									<img src="/Public/home/images/st.png"  width="35" height="35"/>
									<span>已买课程</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/myMl');?>">
									<img src="/Public/home/images/xx.png"  width="35" height="35"/>
									<span>米粒信息</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="shang xia clearfloat">
						<ul>
							<li>
								<a href="<?php echo U('Ucenter/qrcode');?>">
									<img src="/Public/home/images/xj.png"  width="35" height="35"/>
									<span>下级学员生成</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/TeamL');?>">
									<img src="/Public/home/images/rm.png"  width="35" height="35"/>
									<span>下级学员查看</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/withdraw');?>">
									<img src="/Public/home/images/sq.png"  width="35" height="35"/>
									<span>学员申请提现</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="shang xia clearfloat">
						<ul>
							<li>
								<a href="<?php echo U('Ucenter/mySeparate');?>">
									<img src="/Public/home/images/sm.png"  width="35" height="35"/>
									<span>收米信息</span>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Ucenter/leaveMsg');?>">
									<img src="/Public/home/images/fk.png"  width="35" height="35"/>
									<span>意见反馈</span>
								</a>
							</li>
							<li>
								<a href="tel:<?php echo ($_site['phone']); ?>">
									<img src="/Public/home/images/lx.png"  width="35" height="35"/>
									<span>联系我们</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div>  
					<div class="rights">All Rights Reserved@2016efucms 版权所有</div>
					<div class="rights">技术支持：efucms</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--footer star-->

	<!--footer end-->
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