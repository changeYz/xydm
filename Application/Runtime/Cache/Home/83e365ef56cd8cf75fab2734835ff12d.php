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

<body bgcolor="#f2f2f2">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/common(1).css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/app(1).css">
	<div class="red-page-header">
	<i class="iconfont icon-back" style="float: left;" onClick="javascript:history.go( - 1)"></i>
	<h3><?php echo ($_CFG['site']['name']); ?> - 我的客户</h3>
</div>
<style>
.active{
	background: #1071ae;
}
</style>
	
	<div class="level_content">
		<ul id="list">
			
		</ul>
	</div>


<div id="backtop">
	<i class="iconfont icon-fold"></i>
</div>
<link rel="stylesheet" href="/Public/layer/skin/layer.css">
<script src="/Public/home/js/jquery-1.10.1.min.js"></script>
<script src="/Public/layer_mobile/layer.js"></script>
<script src="/Public/home/js/common.js"></script>
<script type="text/javascript">
	var page = 1;
		html = false;
		status='parent1';
	loadTeam();
	$('.zl_select_span span').click(function(){
		$(this).addClass('active');
		$(this).siblings().removeClass("active");
		status = $(this).attr('status');
		p=1;
		$('#list').html('');
		loadTeam();
	});
		
	//加载评论
	function loadTeam(){
		AjaxLoad("<?php echo U('Mh/getTeam');?>",{page:page,status:status},$('#list'),html,loadTeam);
	}
</script>
<div id="backtop"><i class="iconfont icon-fold"></i></div>
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
</body>
</html>