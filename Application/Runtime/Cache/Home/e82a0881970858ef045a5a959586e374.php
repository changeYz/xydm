<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="font-size: 23.4375px;">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
	<title><?php echo ($_CFG['site']['name']); ?> - 注册</title>
	<link href="/Public/home/mhpublic/css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/Public/home/mhcss/style.min.css">
	<script src="/Public/home/mhpublic/js/jquery.min.js" type="text/javascript"></script>
	<script src="/Public/home/mhpublic/js/app.js" type="text/javascript"></script>
	<style>
		.rt-bar > .row .icon svg {
			vertical-align: middle;
			margin-top: -3px;
			width: 20px;
			height: 20px;
		}
		.rt-bar > .row .title {
			font-size: 16px;
			padding-top: 8px;
		}
		.rt-bar {
			height: 50px;
		}
	</style>
</head>
<body>
<div class="rt-bar">
	<div class="row">
		<div class="col icon">
			<a href="<?php echo U('Mh/my');?>">
				<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
					<path d="M29.56 39.47a2 2 0 0 1-1.38-.56L8.45 20 28.17 1.09A2 2 0 1 1 30.94 4L14.23 20l16.71 16a2 2 0 0 1-1.38 3.44z" fill="#ff730a"></path></svg>
			</a>
		</div>
		<div class="col title" style="margin-right: 1.333rem;">设置绑定账号</div>
	</div>
</div>

<div class="message-bar mt-10">
	<div class="login">
		<div class="login-nav">
			<span class="login-close"></span>
		</div>
		<span class="login-icon"><img src="./Public/home/mhimages/placeholder.png"></span>
		<div class="login-form">
			<ul>
				<li><a class="mint-cell mint-field is-nolabel">
					<div class="mint-cell-left">
					</div>
					<div class="mint-cell-wrapper">
						<div class="mint-cell-title">
							<span class="mint-cell-text"></span>
						</div>
						<div class="mint-cell-value">
							<input type="hidden" name="fuid" id="fuid" value="<?php echo ($fuid); ?>" />
							<input placeholder="请输入手机号码" type="tel" id="wxtel" class="mint-field-core" value="<?php echo ($user['wxtel']); ?>">
							<div class="mint-field-clear" id="clear" style="display: none;">
								<i class="mintui mintui-field-error"></i>
							</div>
							<span class="mint-field-state is-default"><i class="mintui mintui-field-default"></i></span>
							<div class="mint-field-other">
							</div>
						</div>

					</div>
					<div class="mint-cell-right">
					</div>
				</a></li>
				<li class="login-password"><a class="mint-cell mint-field is-nolabel">
					<div class="mint-cell-left">
					</div>
					<div class="mint-cell-wrapper">
						<div class="mint-cell-title">
							<span class="mint-cell-text"></span>
						</div>
						<div class="mint-cell-value">
							<input placeholder="请输入密码" type="text" id="wxpassword" class="mint-field-core" value="<?php echo ($user['wxpassword']); ?>">
						</div>

					</div>
					<div class="mint-cell-right">
					</div>
				</a></li>



				<li class="login-submit">
					<div class="btn btnAbled" onclick="login();">
						绑定
					</div>
				</li>
			</ul>
		</div>

	</div>

</div>

<div class="message-box" id="html_box">
</div>
<script>
    var fr = "index.php?m=&c=Mh&a=my";
    $("#mobile").keypress(function(){
        $(this).next().css('display','block');
    });
    $('#clear').click(function(){
        $(this).prev().val('');
        $(this).css('display','none');
    })

    function login() {
        var wxtel = $('#wxtel').val();
        var wxpassword = $('#wxpassword').val();
        var fuid = $('#fuid').val();

        var url1 = '<?php echo U("Mh/bangding");?>';
        var data1 = {wxtel:wxtel,wxpassword:wxpassword,fuid:fuid};
        var fun1 = function(data2){
            if(data2.status == 1) {
                salert(data2.info);
                location.href = data2.url;
            } else {
                salert(data2.info);
            }
        }
        $.post(url1,data1,fun1,'json');
    }


</script>
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