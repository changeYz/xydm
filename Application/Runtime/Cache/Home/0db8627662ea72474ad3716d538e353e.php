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
<title><?php echo ($_site['name']); ?> -- 申请讲师</title>
<link rel="stylesheet" type="text/css" href="/Public/ever/css/common.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/app.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/font.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/designer.css">
<link rel="stylesheet" type="text/css" href="/Public/ever/css/index.css">
<link href="/Public/ever/css/owl.carousel.css" rel="stylesheet">
<script src="/Public/ever/js/jquery-1.8.3.min.js"></script>
<script src="/Public/ever/js/owl.carousel.min.js"></script>
<script src="/Public/ever/js/common.js"></script>
<script src="/Public/ever/js/app.js"></script>
<body bgcolor="#f2f2f2">
<style>
.spark_buy .spark_submit {
    display: block;
    width: 100%!important;
    border: none;
    background: #0085d0;
    color: #fff;
    height: 50px;
    font-size: 22px;
    line-height: 50px;
}
.bottom{height:60px!important;}
.spark_buy {
	position:relative!important;
    width: 70%!important;
    max-width: 720px;
    color: #fff;
    text-align: center;
    font-size: 15px;
    line-height: 50px;
    width: 70%;
    margin: 0 auto;
    margin-top: 10%;
}
.spark_buy .spark_submit {
    display: block;
    width: 120px;
    border: none;
    background: #0085d0;
    color: #fff;
    width: 100%;
    height: 45px;
    line-height: 45px;
    font-size: 15px;
    border-radius: 5px;
}
</style>
<link rel="stylesheet" type="text/css" href="/Public/ever/css/spark.css">
<div class="sparkHead" style="background: #0085d0;color:#fff">
	<i class="iconfont icon-back commonBack" onclick="javascript:history.go(-1)"></i>
	<h3 class="text-overflow_1">申请讲师</h3>
</div>
<div class="spark_content">
	<ul class="clr">
		<li class="flex">
			<h4>姓&nbsp;&nbsp;&nbsp;&nbsp;名</h4>
			<div class="flex_1">
				<input type="text" name="true_name" value="" placeholder="提现需要实名制">
			</div>
		</li>
		<li class="flex">
			<h4>简&nbsp;&nbsp;&nbsp;&nbsp;介</h4>
			<div class="flex_1">
				<input type="text" name="sign" value="" placeholder="提现需要实名制">
			</div>
		</li>
		<li class="flex">
			<h4>手机号</h4>
			<div class="flex_1">
				<input type="text" name="mobile" value="" placeholder="请输入11位手机号">
			</div>
		</li>
		<li class="flex">
			<h4>微信号</h4>
			<div class="flex_1">
				<input type="text" name="wxId" value="" placeholder="请输入微信号">
			</div>
		</li>
		<!-- <li class="flex">
			<h4>性&nbsp;&nbsp;&nbsp;&nbsp;别</h4>
			<div class="flex_1">
				<select name="sex">
					<option value="0">请选择</option>
					<option value="1">男</option>
					<option value="2">女</option>
				</select>
			</div>
		</li>
		<li class="flex">
			<h4>头&nbsp;&nbsp;&nbsp;&nbsp;像</h4>
			<div class="flex_1">
				<link rel="stylesheet" type="text/css" href="/Public/admin/css/common.css">
<style>
.upload img{
    vertical-align: middle;
    border: none;
    max-width: 100%;
    text-align: center;
    float: left;
    margin-left: 20%;
    width: 100px;
    height: 100px;
}
</style>
<div class="upload">
	<div style="position: relative;">
		<a class="btn orange_btn" id="gm_fs_img" style="z-index: -1;">上传图片</a>
		<span class="c666 ml5">尺寸160*160,建议大小不要超过400k</span>
		<div class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 96px; height: 32px; overflow: hidden; z-index: 0;">
			<input type="file" onchange="upload(this);" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
		</div>
	</div>
	<input type="hidden" name="pic" value="">
	<img class="goods_material_upLoad" id="upload_img" style="display:none;" src="">
</div>
<script src="/Public/admin/js/lrz.mobile.min.js"></script>
<script>
//    var v=$("input[name='pic']").val();
//    $("#upload_img").after("<img id='slin' width='150' height='186' src='"+v+"'/>");
	var $this;
	function upload(obj){
	//上传图片至服务器
		$this= $(obj);
		var inputHide = $(obj.parentElement).parent().parent().find("input[type=hidden]");
		lrz(obj.files[0], {
			done: function (results) {
			  // 你需要的数据都在这里，可以以字符串的形式传送base64给服务端转存为图片。
				$.post("<?php echo U('IndexAjax/Upload');?>",{img:results.base64,size:results.base64.length},function(data){
			//		console.log(data);
					if(data.status){
						inputHide.val(data.info);
						$this.parent().parent().parent().find('img').attr('src',data.info);
						$this.parent().parent().parent().find('img').show();
					}else{
						alert(data.info);
					}
				});
			}
		});
	}
</script>	
			</div>
		</li> -->
	</ul>
</div>
<div class="spark_buy flex">
	<button class="spark_submit" onclick="submitOrder()">立	即	申	请</button>
</div>
<div style="height:50px"></div>
<link rel="stylesheet" href="/Public/layer/skin/layer.css">
<script src="/Public/layer_mobile/layer.js"></script>
<script src="/Public/home/js/common.js"></script>
<script type="text/javascript">
	function submitOrder() {
		var true_name = $("input[name=true_name]").val();
			sign = $("input[name=sign]").val();
			wxId = $("input[name=wxId]").val();
			mobile = $("input[name=mobile]").val();
			pic = $("input[name=pic]").val();
			sex = $("select[name=sex]").val();
		
		if (true_name == "") {
			msg("姓名不能为空");
			$("input[name=true_name]").focus();
			return;
		}
		if (sign == "") {
			msg("简介不能为空");
			$("input[name=sign]").focus();
			return;
		}
		var isMobile = /^1\d{10}$/;
		if (!isMobile.test(mobile)) {
			msg("请输入正确的11位手机号");
			$("input[name=mobile]").focus();
			return;
		}
		if (wxId == "") {
			msg("微信号不能为空");
			$("input[name=wxId]").focus();
			return;
		}
		
		/*
		if (sex == "" || sex == 0) {
			msg("请选择性别");
			$("select[name=sex]").focus();
			return;
		}
		if (pic == "") {
			msg("请上传头像");
			return;
		}*/
		var data = {name: true_name, sign:sign, wxid: wxId, mobile: mobile ,sex:sex ,pic:pic};
		$(".spark_submit").attr('disabled', "true").addClass("disabled");
		$(".spark_submit").text("正在提交...");
		$.post("<?php echo U('applyT');?>",data,function (data) {
				console.log(data);
				if (data.status) {
						msg(data.info);
						setTimeout(function(){
							location.href="<?php echo U('Ucenter/index');?>";
						}, 2000);
				} else {
					msg(data.info);
					$(".spark_submit").removeAttr('disabled').removeClass("disabled");
					$(".spark_submit").text("立即申请");
					return;
				}
			},
			"json"
		);
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