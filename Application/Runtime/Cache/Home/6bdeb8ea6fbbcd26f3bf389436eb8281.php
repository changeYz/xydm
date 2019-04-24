<?php if (!defined('THINK_PATH')) exit();?><style>
.swiper-no{
    padding: 20px 0 20px 0;
    min-height: 50px;
    line-height: 10px;
    background-color: #fff;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    color: #93899E;
    margin: 0 auto;
}
</style>
<?php if($list): if(is_array($list)): foreach($list as $key=>$v): ?><li class="flex">
	<img src="<?php echo ($v['headimg']); ?>" />
	<div class="flex_1">
		<p style="padding-top:6px">昵称：<?php echo ($v['nickname']); ?></p>
		<p style="padding-top:6px">微信号：<?php echo ($v['wxid']); ?></p>
		<p style="padding-top:6px">等级：<?php echo get_level_lv_name($v['level'],$v['lv']);?></p>
	</div>
	<?php if($type): ?><div class="leava_msg" onclick="window.location.href=&#39;<?php echo U('Ucenter/message',array('touser'=>$v['id']));?>&#39;">
			<i class="iconfont icon-community"></i>
			<h5>给Ta留言</h5>
		</div>
	<?php else: ?>
		<div class="leava_msg">
			<i class="iconfont icon-recharge"></i>
			<!-- <h5><?php echo sprintf("%.2f",$v['money']);?></h5> -->
			<h5><?php echo separate_all($current_user_id, $v['id']);?></h5>
		</div><?php endif; ?>
</li><?php endforeach; endif; ?>
<?php else: ?>
	<?php if($page == 1): ?><div class="swiper-s">
		<div class="swiper-no">
			<img src="/Public/home/images/empty.png" />
		</div>
		<div class="swiper-no">
			您还未有客户
		</div>
	 </div>
	<?php else: ?>
	<div class="swiper-ss" id="common-load">
		<div class="swiper-no">
			已经加载完数据！
		</div>
	</div><?php endif; endif; ?>
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