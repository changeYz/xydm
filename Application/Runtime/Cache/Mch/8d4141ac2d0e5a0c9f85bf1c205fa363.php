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
			<style>
		ul,li{list-style:none;}
		.txt{width:100%;display: -webkit-box;}
		.txt li{flex:1;-webkit-box-flex: 1;}
		.txt li div{width: 90%;margin: 0 auto;height: 90px;border-radius: 10px;border: 1px solid #ddd;background:#fff;padding:4%;}
		.txt li div h1{font-size:16px;font-weight:bold}
		.txt li div p{line-height: 35px;}
		.txt li div .num{font-size: 20px;color: #39aef5;}
	</style>
	<script src="/Public/plugins/My97DatePicker/WdatePicker.js"></script>
	<div class="pageheader notab">
		<ul class="txt">
			<li>
				<div>
					<h1>今日新增</h1>
					<p><span class="num"><?php echo ($tuAll); ?></span></p>
					<p><span class="num"><?php echo ($tnnuAll); ?></span>个男性&nbsp;&nbsp;<span class="num"><?php echo ($tnvuAll); ?></span>个女性</p>
				</div>
			</li>
			<li>
				<div>
					<h1>昨日新增</h1>
					<p><span class="num"><?php echo ($zuAll); ?></span></p>
					<p><span class="num"><?php echo ($znnuAll); ?></span>个男性&nbsp;&nbsp;<span class="num"><?php echo ($znvuAll); ?></span>个女性</p>
				</div>
			</li>
			<li>
				<div>
					<h1>本月新增</h1>
					<p><span class="num"><?php echo ($yuAll); ?></span></p>
					<p><span class="num"><?php echo ($ynnuAll); ?></span>个男性&nbsp;&nbsp;<span class="num"><?php echo ($ynvuAll); ?></span>个女性</p>
				</div>
			</li>
			<li>
				<div>
					<h1>累计新增</h1>
					<p><span class="num"><?php echo ($luAll); ?></span></p>
					<p><span class="num"><?php echo ($lnnuAll); ?></span>个男性&nbsp;&nbsp;<span class="num"><?php echo ($lnvuAll); ?></span>个女性</p>
				</div>
			</li>
		</ul>
    </div>
	<div id="contentwrapper" class="contentwrapper lineheight21">
		<div class="tableoptions">        
			<form method="post" id="form">
				用户ID:
				<input type="text" name="user_id" value="<?php echo ($_GET['user_id']); ?>" class="smallinput" style="width:50px;" />
				昵称/姓名:
				<input type="text" name="name" value="<?php echo ($_GET['name']); ?>" class="smallinput" style="width:100px;" />
				时间:
				<input type="text" name="time1" value="<?php echo ($_GET['time1']); ?>" class="smallinput" style="width:100px;" onclick="WdatePicker()" />
				到
				<input type="text" name="time2" value="<?php echo ($_GET['time2']); ?>" class="smallinput" style="width:100px;" onclick="WdatePicker()"  />
				<input type="submit" value="查找" />
				<!-- <input type="button" value="导出" onclick="exportExcel()" /> -->
				<script>
				function exportExcel(){
					jQuery("#form").attr('action', "<?php echo U('export');?>");
					jQuery("#form").submit();
				}					
				</script>
			</form>
		</div><!--tableoptions-->
		<table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
			<thead>
					<tr>
						<th class="head1">编号</th>
						<th class="head1">头像</th>
						<th class="head0">昵称</th>
						<th class="head1">账户书币</th>
						<th class="head1">账户余额</th>
						<th class="head0">注册时间</th>
						<th class="head0">一级下线数</th>
						<th class="head0">二级下线数</th>
						<th class="head0">三级下线数</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						
						<td><?php echo ($vo["id"]); ?></td>
						<td><img src="<?php echo ($vo["headimg"]); ?>" style="width:50px; height:50px; border-radius:25px;" /></td>
						<td><?php echo ($vo["nickname"]); ?></td>
						<td><?php echo ($vo["money"]); ?></td>
						<td><?php echo ($vo["rmb"]); ?></td>
						<td><?php if($vo['sub_time'] > 0): echo (date("Y-m-d H:i:s",$vo["sub_time"])); else: ?>-<?php endif; ?></td>
						<td><?php echo ($vo["agent1"]); ?></td>
						<td><?php echo ($vo["agent2"]); ?></td>
						<td><?php echo ($vo["agent3"]); ?></td>
						
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<div class="dataTables_paginate paging_full_numbers" id="dyntable2_paginate">
			<?php echo ((isset($page) && ($page !== ""))?($page):"<p style='text-align:center'>暂时没有数据</p>"); ?>
			</div>
	
	</div><!--contentwrapper-->

        
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