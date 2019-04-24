<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>代理后台</title>
<link rel="stylesheet" href="/Public/admin/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="/Public/plugins/bootstrap/css/bootstrap.font.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="/Public/admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/admin/js/custom/general.js"></script>

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader" style="border-bottom: #009688 solid 2px;">
        <div class="left">
            <h1 class="logo"><?php echo ($_site['name']); ?><span></span></h1>
            <span class="slogan" style=" border-left-color:#396F08; color:#fff">代理管理系统</span>
                 
            <br clear="all" />
            
        </div><!--left-->
		<div class="right">
        	 <span style=" color:#fff;"><?php echo session('mch.mobile');?> <a href="<?php echo U('Index/logout');?>" style=" color:#ccc;">[退出]</a></span>
        </div><!--right-->

    </div><!--topheader-->
    
    <style>
	.vernav2 span.text{ padding-left:10px;}
	.menucoll2 span.text{ display:none;}
	.menucoll2>ul>li>a{ width:12px; padding:9px 10px; !important;}
	.dataTables_paginate a{ padding:0 10px;}
	</style>
    <div class="vernav2 iconmenu">
    	<ul>
			<li>
				<a href="<?php echo U('Admin/welcome');?>">
					<span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
					<span class="text">通知列表</span>
				</a>
            </li>
			<li>
				<a href="#Finance" class="elements">
					<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
					<span class="text">数据统计</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="Finance">
					<li><a href="<?php echo U('Finance/users');?>">用户统计</a></li>
               		<li><a href="<?php echo U('Finance/charge');?>">充值统计</a></li>
					<li><a href="<?php echo U('Finance/separate');?>">分成统计</a></li>
                </ul>
            </li>
			<li>
				<a href="<?php echo U('Mch/index');?>">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					<span class="text">个人中心</span>
				</a>
            </li>
			<li>
				<a href="#send" class="elements">
					<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					<span class="text">推广管理</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="send">
					<li><a href="<?php echo U('Chapter/index');?>">漫画合集</a></li>
               		<li><a href="<?php echo U('Bhapter/index');?>">小说合集</a></li>
                </ul>
            </li>
			<li>
				<a href="<?php echo U('Chapurl/index');?>" class="addons">
					<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
					<span class="text">推广文案管理</span>
				</a>
            </li>
			<li>
				<a href="#withdraw" class="elements">
					<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
					<span class="text">提现管理</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="withdraw">
					<li><a href="<?php echo U('Mch/edit');?>">申请提现</a></li>
               		<li><a href="<?php echo U('Mch/withdraw');?>">提现记录</a></li>
                </ul>
            </li> 
			<!--li>
				<a href="javascript:alert('啊哦~，还没有视频链接！');" target="_blank" class="addons">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					<span class="text">推广链接视频</span>
				</a>
            </li>
			<li>
				<a href="javascript:alert('啊哦~，还没有视频链接！');" target="_blank" class="addons">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					<span class="text">平台教程视频</span>
				</a>
            </li-->
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
    <div class="centercontent">
		
        <div class="pageheader notab">
            <h1 class="pagetitle">编辑代理内容</h1>
            <span class="pagedesc">请认真编辑代理的各项信息</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper lineheight21">
        
        
            <form class="stdform stdform2" method="post">
				<p>
					<label>代理公司名称</label>
					<span class="field"><input type="text" name="name" id="name" value="<?php echo ($info["name"]); ?>" class="smallinput" /></span>
				</p>
				<p>
					<label>会员充值返佣比例<small>会员充值书币时候返佣多少金额的百分比</small></label>
					<span class="field"><input type="text" style="background:#ddd;" readonly id="separate" value="<?php echo ($info["separate"]); ?>" class="smallinput" /></span>
				</p>
				<p>
					<label>代理名称</label>
					<span class="field"><input type="text" name="username" id="username" value="<?php echo ($info["username"]); ?>" class="smallinput" /></span>
				</p>
				<p>
					<label>代理支付宝账号</label>
					<span class="field"><input type="text" name="zfb" id="zfb" value="<?php echo ($info["zfb"]); ?>" class="smallinput" /></span>
				</p>
				<p>
					<label>代理手机号</label>
					<span class="field"><input type="text" name="mobile" id="mobile" value="<?php echo ($info["mobile"]); ?>" class="smallinput" /></span>
				</p>
				<p>
					<label>登录密码</label>
					<span class="field"><input type="text" name="tpassword" id="tpassword" value="<?php echo ($info["tpassword"]); ?>" class="smallinput" /></span>
				</p>
				<p>
					<label>代理漫画地址</label>
					<span class="field"><input type="text" value="<?php echo ($info["url"]); ?>" class="smallinput" readonly style="background:#ddd;" /></span>
				</p>
				<p>
					<label>代理小说地址</label>
					<span class="field"><input type="text" value="<?php echo ($murl); ?>&c=Book&a=index" class="smallinput" readonly style="background:#ddd;" /></span>
				</p>
				<p>
					<label>代理书架地址</label>
					<span class="field"><input type="text" value="<?php echo ($murl); ?>&c=Mh&a=book_shelf" class="smallinput" readonly style="background:#ddd;" /></span>
				</p>
				<p>
					<label>代理中心地址</label>
					<span class="field"><input type="text" value="<?php echo ($murl); ?>&c=Mh&a=my" class="smallinput" readonly style="background:#ddd;" /></span>
				</p>
				<p>
					<label>代理充值地址</label>
					<span class="field"><input type="text" value="<?php echo ($murl); ?>&c=Mh&a=pay" class="smallinput" readonly style="background:#ddd;" /></span>
				</p>
				<p>
					<label>代理阅读历史地址</label>
					<span class="field"><input type="text" value="<?php echo ($murl); ?>&c=Mh&a=book_recent_read" class="smallinput" readonly style="background:#ddd;" /></span>
				</p>
				<p>
					<label>账户余额</label>
					<span class="field">
						<?php echo ($info['money']); ?>
					</span>
				</p>
				<p>
					<label>推广二维码</label>
					<span class="field">
						<a href="javascript:;" style="color:blue" onclick="showQrcode(<?php echo ($vo['id']); ?>)">点击查看</a>
					</span>
				</p>
				<p>
					<label>公众号二维码</label>
					<span class="field">
						<iframe src="<?php echo U('upload', 'event=setPic&url='.$info['gqrcode']);?>" scrolling="no" width="100" height="100"></iframe>
						<input type="hidden" name="gqrcode" id="gqrcode" value="<?php echo ($info['gqrcode']); ?>" class="smallinput" />
						<script>
						function setPic(url){
							document.getElementById('gqrcode').value = url;
						}
						</script>
					</span>
				</p>
				<p class="stdformbutton">
					<button class="submit radius2">提交</button>
					<input type="reset" class="reset radius2" value="重置" />
				</p>
			</form>
			
        </div><!--contentwrapper-->
		 <link rel="stylesheet" href="/Public/layer/skin/layer.css" type="text/css" />
		<script type="text/javascript" src="/Public/layer/layer.js"></script>
		<script>
			var $=jQuery;
			function showQrcode(id){
				layer.open({
				  type: 2,
				  title: '查看二维码',
				  shadeClose: true,
				  shade: 0.8,
				  area: ['445px', '430px'],
				  content: "<?php echo U('showQrcode');?>&id="+id,
				});
			}
		</script>
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->
<script>
	jQuery(document).ready(function(e){
		
		
		// 菜单添加提示 
		$ = jQuery;
		
		// 根据cookie打开对应的菜单
		if($.cookie('curIndex')){
			console.log($.cookie('curIndex'));
			$(".vernav2>ul>li").eq($.cookie('curIndex')).find('ul').show();
		}
		
		$(".vernav2 ul li").each(function(index, el){
			$(this).attr('title', $(this).find("a").find('span.text').text());
			
		});
		
		
		$(".vernav2>ul>li>a").each(function(index,el){
			$(el).on('click',function(e){
				$.cookie('curIndex',$(this).parent('li').index());
			});
		});
		
		
		// 调整默认选择内容
		$("select").each(function(index, element) {
			$(element).find("option[value='"+$(this).attr('default')+"']").attr('selected','selected');
		});
		// 调整提示内容
	});
</script>
</body>
</html>