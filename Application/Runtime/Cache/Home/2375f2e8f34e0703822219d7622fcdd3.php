<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0037)https://m.efucms.com/my/kefu.html -->
<html data-dpr="1" style="font-size: 43.1px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($_CFG['site']['name']); ?> - 客服帮助</title>
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
</head>
<body style="font-size: 12px;">
<div class="rt-bar">
    <div class="row">
        <div class="col icon">
            <a href="<?php echo U('Mh/my');?>">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><path d="M29.56 39.47a2 2 0 0 1-1.38-.56L8.45 20 28.17 1.09A2 2 0 1 1 30.94 4L14.23 20l16.71 16a2 2 0 0 1-1.38 3.44z" fill="#ff730a"></path></svg>
            </a>
        </div>
        <div class="col title" style="margin-right: 1.333rem;">客服帮助</div>
    </div>
</div>
<div class="contact-box mt-10" data-type="default">
    <div class="row">在线时间：周一至周六9:00-18:00</div>
    <div class="row">客服QQ：  <label class="label"><?php echo ($_CFG["site"]["kfqq"]); ?></label></div>
    <!-- <div class="row">二维码： <img src="/Public/home/mhimages/manhua.png" width="100" height="100" style="width:100px;height:100px;"></div> -->
</div>

<div class="qa-box mt-10">
    <!-- <div class="item">
        <div class="head">
            <div class="title">如何充值金币？</div>
            <div class="action">
                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><title>11</title><path fill="#d2d2d2" d="M18 29.13L.94 12.19l2.12-2.13L18 24.9l14.94-14.84 2.12 2.13L18 29.13"></path></svg>
            </div>
        </div>
        <div class="body" style="display: none;">
            答：在“我的”界面点击“金币余额”，点击“我要充值”按钮进行充值；或直接点击“充值送金币”进行充值；充值后的金币不可兑换为现金，不予退款。
        </div>
    </div> -->
    <div class="item">
        <div class="head">
            <div class="title">本平台怎么收费？</div>
            <div class="action">
                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><title>11</title><path fill="#d2d2d2" d="M18 29.13L.94 12.19l2.12-2.13L18 24.9l14.94-14.84 2.12 2.13L18 29.13"></path></svg>
            </div>
        </div>
        <div class="body">
            答：目前平台上的书籍分为两种，一种是免费阅读，一种是充值阅读。
        </div>
    </div>
    <!-- <div class="item">
        <div class="head">
            <div class="title">如何从书架中清除不想看的书？</div>
            <div class="action">
                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><title>11</title><path fill="#d2d2d2" d="M18 29.13L.94 12.19l2.12-2.13L18 24.9l14.94-14.84 2.12 2.13L18 29.13"></path></svg>
            </div>
        </div>
        <div class="body">
            答：点书架右上角“管理”，可以删除不想看的书。
        </div>
    </div> -->
    <!-- <div class="item">
        <div class="head">
            <div class="title">为什么我正在看的书看不了了？</div>
            <div class="action">
                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><title>11</title><path fill="#d2d2d2" d="M18 29.13L.94 12.19l2.12-2.13L18 24.9l14.94-14.84 2.12 2.13L18 29.13"></path></svg>
            </div>
        </div>
        <div class="body">
            答：可能您所看的书，在某章出现故障，此情况可联系 <a style="color:#03F" href="javascript:void(0);" onclick="$(&#39;#kefu-qq&#39;)[0].click();">奇热客服</a>处理。也可能涉及敏感话题或者其它问题被暂时下架了，下架的书不能阅读。
        </div>
    </div> -->
    <div class="item">
        <div class="head">
            <div class="title">所有书籍都是正版的吗？</div>
            <div class="action">
                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                <title>11</title><path fill="#d2d2d2" d="M18 29.13L.94 12.19l2.12-2.13L18 24.9l14.94-14.84 2.12 2.13L18 29.13"></path></svg>
            </div>
        </div>
        <div class="body">
            答:本平台始终致力于支持正版内容的引入及合作，平台上所有书籍都是正版。
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.qa-box > .item .head').on('click', function(e) {
            $(this).siblings('.body').slideToggle(200, 'linear');
            if ($(this).hasClass('toggle')) {
                $(this).removeClass('toggle')
                return
            }
            $(this).addClass('toggle')
        });
    })
</script>
<!-- 统计 -->
<script type="text/javascript" src="/Public/home/mhjs/gcoupon.min.js"></script>
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