<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html data-dpr="1" style="font-size: 54px;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<title>人气榜</title>
<link href="/Public/home/css/swiper.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/home/css/style.min.css">
<link rel="stylesheet" type="text/css" href="/Public/home/mhcss/style.min.css?v=201712191015"/>
<script type="text/javascript">
    if (self != top) {
        top.location.href=self.location.href;
    }
    var req_time = '30',page_start_time=+(new Date),page_end_time=page_start_time;
    </script>
<meta name="viewport" content="designWidth=750,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- 防止加载lib.flexible加载的时候文字由大变小的闪烁 -->
<style>
        html, body {
            font-size: 12px;
        }
</style>
<!-- lib.flexible 移动端相对适应比例 必须在浏览器head类 -->
<script type="text/javascript">
    !function (a, b) { function c() { var b = f.getBoundingClientRect().width; b / i > 540 && (b = 540 * i); var c = b / 10; f.style.fontSize = c + "px", k.rem = a.rem = c } var d, e = a.document, f = e.documentElement, g = e.querySelector('meta[name="viewport"]'), h = e.querySelector('meta[name="flexible"]'), i = 0, j = 0, k = b.flexible || (b.flexible = {}); if (g) {  var l = g.getAttribute("content").match(/initial\-scale=([\d\.]+)/); l && (j = parseFloat(l[1]), i = parseInt(1 / j)) } else if (h) { var m = h.getAttribute("content"); if (m) { var n = m.match(/initial\-dpr=([\d\.]+)/), o = m.match(/maximum\-dpr=([\d\.]+)/); n && (i = parseFloat(n[1]), j = parseFloat((1 / i).toFixed(2))), o && (i = parseFloat(o[1]), j = parseFloat((1 / i).toFixed(2))) } } if (!i && !j) { var p = (a.navigator.appVersion.match(/android/gi), a.navigator.appVersion.match(/iphone/gi)), q = a.devicePixelRatio; i = p ? q >= 3 && (!i || i >= 3) ? 3 : q >= 2 && (!i || i >= 2) ? 2 : 1 : 1, j = 1 / i } if (f.setAttribute("data-dpr", i), !g) if (g = e.createElement("meta"), g.setAttribute("name", "viewport"), g.setAttribute("content", "initial-scale=" + 1 + ", maximum-scale=" + 1 + ", minimum-scale=" + 1 + ", user-scalable=no"), f.firstElementChild) f.firstElementChild.appendChild(g); else { var r = e.createElement("div"); r.appendChild(g), e.write(r.innerHTML) } a.addEventListener("resize", function () { clearTimeout(d), d = setTimeout(c, 300) }, !1), a.addEventListener("pageshow", function (a) { a.persisted && (clearTimeout(d), d = setTimeout(c, 300)) }, !1), "complete" === e.readyState ? e.body.style.fontSize = 12 * i + "px" : e.addEventListener("DOMContentLoaded", function () { e.body.style.fontSize = 12 * i + "px" }, !1), c(), k.dpr = a.dpr = i, k.refreshRem = c, k.rem2px = function (a) { var b = parseFloat(a) * this.rem; return "string" == typeof a && a.match(/rem$/) && (b += "px"), b }, k.px2rem = function (a) { var b = parseFloat(a) / this.rem; return "string" == typeof a && a.match(/px$/) && (b += "rem"), b } }(window, window.lib || (window.lib = {}));
    </script>
<script type="text/javascript" src="/Public/home/mhjs/jquery.js"></script>
<style type="text/css">
      #banner-container { display: block; position: relative; z-index: 1; width: 100%; overflow: hidden; }
      #banner-container .loading { display: block; width: 70px; text-align: center; font-size: 0; position: absolute; top: 50%; left: 50%; -webkit-transform: translate3d(-50%,-50%,0); transform: translate3d(-50%,-50%,0); }
      #banner-container .loading .item { width: 18px; height: 18px; margin: 0 2px; background-color: #333333; border-radius: 100%; display: inline-block; -webkit-animation: loading-delay 1.4s infinite ease-in-out; animation: loading-delay 1.4s infinite ease-in-out; -webkit-animation-fill-mode: both; animation-fill-mode: both; }
      #banner-container .loading .item:nth-child(2) { -webkit-animation-delay: -0.16s; animation-delay: -0.16s; }
      #banner-container .loading .item:nth-child(3) { -webkit-animation-delay: -0.32s; animation-delay: -0.32s; }
      @-webkit-keyframes loading-delay {
          0%,80%,100% {
              -webkit-transform: scale(0);
          }
          40% {
              -webkit-transform: scale(1);
          }
      }
      @keyframes loading-delay {
          0%,80%,100% {
              transform: scale(0);
              -webkit-transform: scale(0);
          }
          40% {
              transform: scale(1);
              -webkit-transform: scale(1);
          }
      }
</style>
</head>
<body style="font-size: 12px;" class="mui-ios mui-ios-11 mui-ios-11-0">
<style>
    .books-classify {
            overflow:hidden;
            padding: 0 .32rem;
        }
        .books-classify>div {
            overflow:hidden;
            border-bottom: 1px solid #eee;
        }
        .bcigy-item {
            float: left;
            width:33.3%;
            height:16px;
            line-height: 16px;
            text-align: center;
            color:#666;
            font-size: 14px;
            border-right: 1px solid #eee;
            box-sizing: border-box;
            margin: 10px 0;
        }  
        .bcigy-item:nth-child(3n) {
            border-right: none;
        } 
        .bcigy-sel {
            color: #ff5420;
        }
</style>
<div class="rt-bar">
	<div class="row">
		<div class="col icon">
			<a href="<?php echo U('Book/index');?>">
			<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40"><path d="M29.56 39.47a2 2 0 0 1-1.38-.56L8.45 20 28.17 1.09A2 2 0 1 1 30.94 4L14.23 20l16.71 16a2 2 0 0 1-1.38 3.44z" fill="#ff730a"></path></svg>
			</a>
		</div>
		<div class="col title" style="margin-right: 1.333rem;">
			人气榜
		</div>
	</div>
</div>
<div class="books-classify">
	<div>
		<div class="bcigy-item" _order="reader" onclick="location.href=&#39;<?php echo U('Mh/book_hot',array('order'=>'reader'));?>&#39;">
			人气榜
		</div>
		<div class="bcigy-item" _order="time" onclick="location.href=&#39;<?php echo U('Mh/book_hot',array('order'=>'time'));?>&#39;">
			最新上架
		</div>
		<div class="bcigy-item" _order="overs" onclick="location.href=&#39;<?php echo U('Mh/book_hot',array('order'=>'overs'));?>&#39;">
			完结榜
		</div>
	</div>
	<div>
		<div class="bcigy-item" _order="free" onclick="location.href=&#39;<?php echo U('Mh/book_hot',array('order'=>'free'));?>&#39;">
			免费榜
		</div>
		<div class="bcigy-item" _order="cate1" onclick="location.href=&#39;<?php echo U('Mh/book_hot',array('order'=>'cate1'));?>&#39;">
			男生榜
		</div>
		<div class="bcigy-item" _order="cate2" onclick="location.href=&#39;<?php echo U('Mh/book_hot',array('order'=>'cate2'));?>&#39;">
			女生榜
		</div>
	</div>
</div>
<div class="books-res" id="html_box" name="top">
	<?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="item">
		<a href="<?php echo U('Mh/bookinfo',array('mhid'=>$v['id']));?>" class="link">
			<div class="cover">
				<img width="63" height="84" class="" src="<?php echo ($v["cover_pic"]); ?>" style="background: rgb(238, 238, 238); display: block;">
			</div>
			<div class="body">
				<div class="title">
					<?php echo ($v["title"]); ?>
				</div>
				<div class="author">
					作者：<?php echo ($v["author"]); ?>
				</div>
				<div class="text">
					<?php echo ($v["summary"]); ?>
				</div>
				<div class="bottom">
					<span class="col"><i class="icon-gray-hot"></i> <?php echo ($v["reader"]); ?></span>
					<span class="col"><i class="icon-hand"></i> <?php echo ($v["likes"]); ?></span>
				</div>
			</div>
		</a>
		<div class="action">
			<a href="<?php echo U('Mh/bookinfo',array('mhid'=>$v['id']));?>" class="btn">阅读</a>
		</div>
	</div><?php endforeach; endif; ?>
</div>
</div>
<div class="backtop" id="icon-top" style="display:none;">
<a href="<?php echo ($url); ?>&code=0#top" class="top">顶部</a></div>
<div class="backtop" id="icon-top" style="display:none">
<a href="javascript:void(0);" class="top">顶部</a>
</div>
<div class="bm-box" style="margin-bottom:70px">
</div>
<div class="tabar flb">
<nav class="nav hls1">
<div class="item">
	<a href="<?php echo U('Mh/book_shelf');?>">
	<i class="icon-book"></i>
	<div class="title">
		书架
	</div>
	</a>
</div>
<div class="item">
	<a href="<?php echo U('Mh/index');?>" class="active">
	<i class="icon-home"></i>
	<div class="title">
		首页
	</div>
	</a>
</div>
<div class="item">
	<a href="<?php echo U('Mh/my');?>">
	<i class="icon-user"></i>
	<div class="title">
		我的
	</div>
	</a>
</div>
</nav>
</div>
<script>
	$(function(){
		var order = "<?php echo ($_GET['order']); ?>"?"<?php echo ($_GET['order']); ?>":"reader";
		$('.bcigy-item').each(function(){
			if($(this).attr("_order") == order){
				$('.bcigy-item').removeClass("bcigy-sel");
				$(this).addClass("bcigy-sel");
			}
		});
	});
	function bh_msg_tips(msg) {
		var oMask = document.createElement("div");
		oMask.id = "bh_msg_lay";
		oMask.style.position = "fixed";
		oMask.style.left = "0";
		oMask.style.top = "50%";
		oMask.style.zIndex = "100";
		oMask.style.textAlign = "center";
		oMask.style.width = "100%";
		oMask.innerHTML = "<span style='background: rgba(0, 0, 0, 0.65);color: #fff;padding: 10px 15px;border-radius: 3px; font-size: 14px;'>" + msg
			+ "</span>"; document.body.appendChild(oMask);
		setTimeout(function () {
			$("#bh_msg_lay").remove();
		}, 2000);
	}
</script>
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