<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0038)https://m.efucms.com/my/<?php echo U('Mh/index');?> -->
<html data-dpr="1" style="font-size: 37.5px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($_CFG['site']['name']); ?> - 个人中心</title>
    <!-- 共用引入资源.开始 -->

    <script src="/Public/home/mhjs/stats.js" name="MTAH5" sid="500462993"></script>
    <meta name="viewport" content="designWidth=750,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- 防止加载lib.flexible加载的时候文字由大变小的闪烁 -->
    <style>html,body{font-size:12px;}</style>
    <!-- lib.flexible 移动端相对适应比例 必须在浏览器head类 -->
    <script type="text/javascript">
        !function (a, b) { function c() { var b = f.getBoundingClientRect().width; b / i > 540 && (b = 540 * i); var c = b / 10; f.style.fontSize = c + "px", k.rem = a.rem = c } var d, e = a.document, f = e.documentElement, g = e.querySelector('meta[name="viewport"]'), h = e.querySelector('meta[name="flexible"]'), i = 0, j = 0, k = b.flexible || (b.flexible = {}); if (g) {  var l = g.getAttribute("content").match(/initial\-scale=([\d\.]+)/); l && (j = parseFloat(l[1]), i = parseInt(1 / j)) } else if (h) { var m = h.getAttribute("content"); if (m) { var n = m.match(/initial\-dpr=([\d\.]+)/), o = m.match(/maximum\-dpr=([\d\.]+)/); n && (i = parseFloat(n[1]), j = parseFloat((1 / i).toFixed(2))), o && (i = parseFloat(o[1]), j = parseFloat((1 / i).toFixed(2))) } } if (!i && !j) { var p = (a.navigator.appVersion.match(/android/gi), a.navigator.appVersion.match(/iphone/gi)), q = a.devicePixelRatio; i = p ? q >= 3 && (!i || i >= 3) ? 3 : q >= 2 && (!i || i >= 2) ? 2 : 1 : 1, j = 1 / i } if (f.setAttribute("data-dpr", i), !g) if (g = e.createElement("meta"), g.setAttribute("name", "viewport"), g.setAttribute("content", "initial-scale=" + 1 + ", maximum-scale=" + 1 + ", minimum-scale=" + 1 + ", user-scalable=no"), f.firstElementChild) f.firstElementChild.appendChild(g); else { var r = e.createElement("div"); r.appendChild(g), e.write(r.innerHTML) } a.addEventListener("resize", function () { clearTimeout(d), d = setTimeout(c, 300) }, !1), a.addEventListener("pageshow", function (a) { a.persisted && (clearTimeout(d), d = setTimeout(c, 300)) }, !1), "complete" === e.readyState ? e.body.style.fontSize = 12 * i + "px" : e.addEventListener("DOMContentLoaded", function () { e.body.style.fontSize = 12 * i + "px" }, !1), c(), k.dpr = a.dpr = i, k.refreshRem = c, k.rem2px = function (a) { var b = parseFloat(a) * this.rem; return "string" == typeof a && a.match(/rem$/) && (b += "px"), b }, k.px2rem = function (a) { var b = parseFloat(a) / this.rem; return "string" == typeof a && a.match(/px$/) && (b += "rem"), b } }(window, window.lib || (window.lib = {}));
    </script>
    <link rel="stylesheet" type="text/css" href="/Public/home/mhcss/style.min.css">
    <script type="text/javascript" src="/Public/home/mhjs/fundebug.0.1.7.min.js" apikey="ba3a0e0d938e92b44f279067dffb8d071ee87fc35eb75918b7a900e8581a955d"></script>
    <script type="text/javascript" src="/Public/home/mhjs/jquery.js"></script>
    <!-- 共用引入资源.结束 -->
    <script type="text/javascript" src="/Public/home/mhjs/saved_resource"></script>
	
	<style>

/* .user-notice{height: 1.5rem;padding: .5rem;font-size:.85rem;line-height: 1.5rem;background:#fff} */
.user-notice-l{width:25%;float:left;height:30px;line-height:30px;}
.user-notice-r{color:#928c8c;width:75%;float:left}
</style>
	
</head>
<body style="font-size: 12px;">
<!--<div class="uh-box">-->
<!--    <img src="/Public/home/images/ubg.png" class="bg">-->
<!--    <div class="container">-->
<!--      <div class="avatar">-->
<!--      <input type="file" name="file" onchange="upload(this)" class="file" style="display:none;" />-->
<!--        <img width="65" height="65" id="showheadimg" src="<?php echo ($user["headimg"]); ?>" onclick="chheadimg();" />-->
<!--		<?php if($user['vip']): ?>-->
<!--        <div class="deco">-->
<!--          <label class="rank">VIP</label>-->
<!--        </div>-->
<!--<?php endif; ?>-->
<!--      </div>-->
<!--      <div class="body">-->
<!--        <div class="title"><?php echo ($user["nickname"]); ?></div>-->
<!--        <div class="text">-->
<!--          <span style="display: block;">ID：<?php echo ($user["id"]); ?></span>-->
<!--         <?php if($user['vip']): ?><span style="display: block;">VIP到期时间：<?php echo (date("Y-m-d",$user['vip_e_time'])); ?></span><?php endif; ?>-->
<!--        </div>-->
<!--      </div>-->

<!--		<div class="action">-->
<!--			<a href="<?php echo U('Mh/withdraw');?>" class="btn btn-sign" style="color:#2196F3">申请提现</a>-->
<!--		</div>-->
<!--		<div class="action">-->
<!--			<?php if($sign): ?>-->
<!--				<a href="javascript:;" class="btn btn-sign" style="color:#FF5722">已签到</a>-->
<!--			<?php else: ?>-->
<!--				<a href="javascript:;" onclick="SignOn(this);" class="btn btn-sign" style="color:#2196F3">签到</a>-->
<!--<?php endif; ?>-->

<!--		</div>-->
<!--    </div>-->
<!--  </div>-->
<!--头部-->
<div class="uh-head">
    <div class="goback" >
        <a href="javascript:history.go(-1);">
            <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><path d="M29.56 39.47a2 2 0 0 1-1.38-.56L8.45 20 28.17 1.09A2 2 0 1 1 30.94 4L14.23 20l16.71 16a2 2 0 0 1-1.38 3.44z" fill="#fff"></path>
            </svg>
        </a>
    </div>
    <div class="avatar">
        <input type="file" name="file" onchange="upload(this)" class="file" style="display:none;" />
        <img width="65" height="65" id="showheadimg" src="<?php echo ($user["headimg"]); ?>" onclick="chheadimg();" />
    </div>
    <div class="username"><?php echo ($user["nickname"]); ?></div>
    <div class="deco">
        <?php if($user['vip']): ?>VIP
        <?php else: ?>
            普通会员<?php endif; ?>
    </div>
</div>
<!--头部结束-->
  <script>
	function SignOn(ob){
		var $this = ob;
		bh_msg_tips('请稍候，请求正在发送中');
		$.post("<?php echo U('Book/sign');?>",function(d){
			$("#bh_msg_lay").remove();
			if(d){
				if(d.status){
					bh_msg_tips(d.info);
					$($this).attr('onclick','').unbind('click');
					$($this).html('签到成功');
				}else{
					bh_msg_tips(d.info);
				}
			}else{
				alert('非法请求');
			}
		});
	}
  </script>


<!-- <div class="user-notice">
		<div class="user-notice-l fl">
			<i class="glyphicon glyphicon-volume-up"></i>	最新公告：
		</div>
		<div class="user-notice-r fl">
			<marquee behavior="scroll" direction="left" style="color: #EC5C11;font-weight: bold;width: 100%;height: 30px;font-size: 14px;line-height: 30px;" scrollamount="3"><?php echo ($_CFG['site']['gonggao']); ?></marquee>
		</div>
</div>
 -->
<div class="uh-nav mb5 mb-tabar" style="clear:both">
     <!--ViP有效期-->
    <div class="item ">
        <a href="<?php echo U('Mh/pay');?>" class="link">
            <i class="my-fun14"></i>
            <div class="title" >VIP有效期：
                <?php if($user['vip']): ?><span style="color:#999;">
                        <span style="color:#ee2112;font-weight: bold;"><?php echo (date("Y",$user['vip_e_time'])); ?></span>年
                        <span style="color:#ee2112;font-weight: bold;"><?php echo (date("m",$user['vip_e_time'])); ?></span>月
                        <span style="color:#ee2112;font-weight: bold;"><?php echo (date("d",$user['vip_e_time'])); ?></span>日
                    </span>
                <?php else: ?>
                    <span style="color:#999;">
                        <span style="color:#ee2112;font-weight: bold;">0</span>天
                        <span style="color:#ee2112;font-weight: bold;">0</span>时
                        <span style="color:#ee2112;font-weight: bold;">0</span>分
                    </span><?php endif; ?>
            </div>
        </a>
        <div class="action">
           <a class="btn2"> 充值/续期 </a>
        </div>
    </div>
    <!--ViP结束-->
    <!--阅读币-->
    <div class="item tl">
        <a href="<?php echo U('Mh/pay');?>" class="link">
            <i class="my-fun13"></i>
            <div class="title" >阅读币：
                <span style="color:#ee2112;font-weight: bold;"><?php echo (floatval($user["money"])); ?></span> 枚
            </div>
        </a>
        <div class="action">
            <a class="btn2"> 购买 </a>
        </div>
    </div>
    <!--阅读币结束-->
    <!--佣金-->
    <div class="item tl">
        <a  class="link">
            <i class="my-fun12"></i>
            <div class="title" >佣金：
                    <span style="color:#ee2112;font-weight: bold;"><?php echo (floatval($user["rmb"])); ?></span> 元
            </div>
        </a>
    </div>
    <!--佣金-->
    <!--站内信息-->
    <div class="item mt-10">
        <a  href="<?php echo U('Mh/message_index');?>" class="link">
            <i class="my-fun11"></i>
            <div class="title" >我的消息</div>
        </a>
    </div>
    <!--站内信息结束-->
    <!--推广二维码-->
    <div class="item tl">
        <a  href="<?php echo U('Mh/qrcode');?>&id=<?php echo ($user['id']); ?>" class="link">
            <i class="my-fun9"></i>
            <div class="title" >推广二维码</div>
        </a>
    </div>
    <!--推广二维码结束-->
    <!--每日签到-->
    <div class="item tl">
        <a  href="javascript:;" onclick="SignOn(this);" class="link">
            <i class="my-fun8"></i>
            <div class="title" >签到</div>
        </a>
    </div>
    <!--每日签到结束-->
    <!--账单明细-->
    <div class="item mt-10">
        <a  href="<?php echo U('Book/record');?>" class="link">
            <i class="my-fun7"></i>
            <div class="title" >充值账单明细 / 签到记录</div>
        </a>
    </div>
    <!--账单明细结束-->
    <!--绑定手机端账号-->
    <div class="item tl">
        <a  href="<?php echo U('Mh/book_shelf');?>" class="link">
            <i class="my-fun5"></i>
            <div class="title" >我的搜藏</div>
        </a>
    </div>
    <!--绑定手机端账号结束-->
    <!--绑定手机端账号-->
    <div class="item tl">
        <a  href="<?php echo U('Mh/book_recent_read');?>" class="link">
            <i class="my-fun4"></i>
            <div class="title" >浏览记录</div>
        </a>
    </div>
    <!--绑定手机端账号结束-->
    <!--绑定手机端账号-->
    <div class="item mt-10">
        <a  href="<?php echo U('Mh/bangding');?>" class="link">
            <i class="my-fun6"></i>
            <div class="title" >绑定手机端账号</div>
        </a>
    </div>
    <!--绑定手机端账号结束-->
    <!--div class="item tl">
        <a href="<?php echo U('Mh/my_feedback');?>" class="link">
            <i class="icon-feedback"></i>
            <div class="title">建议反馈</div>
            <div class="text">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 14 24"><title>right-arrow</title><path d="M1.91 1.93L12.06 12 1.91 22" fill="none" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </div>
        </a>
    </div-->
    <!--客服帮助-->
    <div class="item tl">
        <a  href="<?php echo U('Mh/my_kefu');?>" class="link">
            <i class="my-fun8"></i>
            <div class="title" >客服帮助</div>
        </a>
    </div>
    <!--退出-->
    <div class="item mt-10">
        <a href="<?php echo U('MhPublic/logout');?>" class="link">
            <div class="title" style="text-align: center"><span style="color:#ee2112;">退出/切换账户</span></div>
        </a>
    </div>
</div>


<div class="tabar flb">
    <nav class="nav hls1">
        <div class="item m01">
            <a href="<?php echo U('Mh/index');?>" >
                <i class="my-home"></i>
                <div class="title">首页</div>
            </a>
        </div>
        <div class="item m02">
            <a href="<?php echo U('Mh/book_cate');?>">
                <i class="my-type"></i><div class="title">分类</div>
            </a>
        </div>
        <div class="item m03">
            <a href="<?php echo U('Mh/book_shelf');?>">
                <i class="my-book"></i><div class="title">书架</div>
            </a>
        </div>

        <div class="item m04">
            <a href="<?php echo U('Mh/my');?>" class="active">
                <i class="my-user"></i><div class="title">我的</div>
            </a>
        </div>
    </nav>
</div>

<div class="mask-box" style="display: none;"></div>
<!-- <div class="modal" style="display: none;">
    <div class="inner">
        <div class="sign-box">
            <div class="head">
                <div class="title">签到成功</div>
            </div>
            <div class="body">
                <div class="text">金豆+10</div>
                <div class="row">
                    <div class="col mon sign-1"><span>1</span><div>周一</div></div>
                    <div class="col tue sign-2"><span>2</span><div>周二</div></div>
                    <div class="col wed sign-3"><span>3</span><div>周三</div></div>
                    <div class="col thu sign-4"><span>4</span><div>周四</div></div>
                    <div class="col fri sign-5"><span>5</span><div>周五</div></div>
                    <div class="col sat sign-6"><span>6</span><div>周六</div></div>
                    <div class="col sun sign-7"><span>7</span><div>周日</div></div>
                </div>
                <div class="desc">每周连续签到7天，额外奖励50金豆</div>
            </div>
        </div>
        <div class="pull-action-2">
            <a href="javascript:void(0);" onclick="$(&#39;.mask-box&#39;).hide();$(&#39;.modal&#39;).hide();">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M29.65 27.53L18.11 16 29.65 4.44a1.5 1.5 0 0 0-2.12-2.12L16 13.86 4.44 2.32a1.5 1.5 0 0 0-2.12 2.12L13.86 16 2.32 27.53a1.5 1.5 0 1 0 2.12 2.12L16 18.1l11.53 11.55a1.5 1.5 0 0 0 2.12-2.12z" fill="#999"></path></svg>
            </a>
        </div>
    </div>
</div> -->
<script type="text/javascript">
    $(function(){
        var $autopay = $("#autopay");
        $("#switch-auto-buy").click(function(){
            if($autopay.hasClass('posting')){
                bh_msg_tips('请稍等，正在设置中');
                return false;
            }
            var autoPay = parseInt($autopay.val()),autoPay=!autoPay?1:0;
            $autopay.addClass('posting');
            AjaxJson("/My/switchAutoBuy",{autoPay:autoPay,random:+(new Date)},function(res){
                $autopay.removeClass('posting');
                if(res.status*1 == 1){
                    $autopay.val(autoPay).prop('checked',!!autoPay);
                }else{
                    bh_msg_tips(res.info);
                }
            })
        });
    });
    var is_request = false;
    function sign_in(){
        if(is_request){
            return false;
        }
        is_request = true;
        AjaxJson("/My/ajax_sign",{random:+(new Date)},function(res){
            is_request = 0;
            if(res.status*1 == 1){
                var sign_weeks = res.sign_weeks.split(',');
                for(var i=0;i<res.week;i++){
                    $('.sign-'+(i+1)).addClass('after')
                }
                sign_weeks.forEach(function(val,index){
                    $('.sign-'+val).addClass('signed');
                });
                $('.mask-box').show();
                $('.modal').show();
                $('.btn-sign').removeAttr('onclick');
                $('.btn-sign').text('已签到');
                $('.btn-sign').css({"color":"#999"});
                $('.today-bean').text(res.today_bean);
            }else{
                bh_msg_tips(res.msg);
            }
        });
    }
</script>
<!-- 统计 -->
<script type="text/javascript" src="/Public/home/mhjs/gcoupon.min.js"></script>
<script type="text/javascript" src="/Public/home/mhjs/lrz.mobile.min.js"></script>
<script type="text/javascript">
    function addLoadEvent(func){
        if (typeof window.addEventListener != "undefined") {
            window.addEventListener("load",func,false);
        } else {
            window.attachEvent("onload",func) ;
        }
    }
    function tj_getcookie(name){
        var nameValue = "";
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        if (arr = document.cookie.match(reg)) {
            nameValue = decodeURI(arr[2]);
        }
        return nameValue;
    }
    function getQueryString(name){
        var reg = new RegExp("(^|&)"+name+"=([^&]*)(&|$)","i");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }
    addLoadEvent(function(){
        var error_img = new Image(),channel=tj_getcookie('qrmh_channel'),channel_type=tj_getcookie('qrmh_channel_type');
        error_img.onerror=null;
        error_img.src="//www.efucms.com/stats/?c="+channel+"&ct="+channel_type+"&rnd="+(+new Date);
        error_img=null;
        //某些地方页面缓存-检测
        var p_img =new Image(), p_userid = parseInt("5414066"),c_auth=tj_getcookie('qrmh_auth'),p_reload = getQueryString('p_reload');
        if(p_userid>0&&c_auth==''){
            if(p_reload==null){
                var url = window.location.href;
                //刷新一次页面
                window.location.href=url.indexOf("?")>0?(url+'&p_reload=1&reload_time='+(+new Date)):(url+'?p_reload=1&reload_time='+(+new Date));
            }else{
                //还是出现这个问题的话，就记录下来
                p_img.onerror=null;
                p_img.src="//www.efucms.com/page_stats/?p_userid="+p_userid+"&rnd="+(+new Date);
            }
        }
        p_img=p_userid=c_auth=p_reload=null;
    });
    //update byefucms 20170906 某些手机系统下，旋转屏幕出现页面混乱问题，通过延时500ms滚动页面1个单位得以恢复正常
    var evt = "onorientationchange" in window ? "orientationchange" : "resize";
    window.addEventListener(evt, function() {
        setTimeout(function(){
            window.scrollTo(0, window.pageYOffset+1);
        },500);
    }, false);
    
    //点击头像
    function chheadimg() {
    	$("input[name='file']").click();
    }
    function upload(obj){
		//上传图片至服务器
		lrz(obj.files[0], {
			done: function (results) {
				  // 你需要的数据都在这里，可以以字符串的形式传送base64给服务端转存为图片。
				  $.post("<?php echo U('upload_64');?>",
						  {img:results.base64,size:results.base64.length,user_id:"<?php echo ($user['id']); ?>"},function(data){
							  if(data.status){
								  //img.attr('src',data.info);
								  $("#showheadimg").attr('src',data.info.uploadPathtrue);
							  }else{
								  alert(data.info.message);
							  }
						  });
			}
		});
		
	}
    
</script>
<!-- 统计 -->
<!-- 第三方qq统计 -->
<!-- <script type="text/javascript">
    var _mtac = {};
    (function() {
        setTimeout(function(){
            var mta = document.createElement("script");
            mta.src = (("https:" == document.location.protocol) ? "https://" : "http://")+"pingjs.qq.com/h5/stats.js?v2.0.4";
            mta.setAttribute("name", "MTAH5");
            mta.setAttribute("sid", "500462993");
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(mta, s);
        },888);
    })();
</script> -->
<!-- 第三方qq统计 -->
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
</body></html>