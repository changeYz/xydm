<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>管理后台</title>
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
            <span class="slogan" style=" border-left-color:#396F08; color:#fff">后台管理系统</span>
                 
            <br clear="all" />
            
        </div><!--left-->
		<div class="right">
        	 <span style=" color:#fff;"><?php echo session('admin.nickname');?> <a href="<?php echo U('Index/logout');?>" style=" color:#ccc;">[退出]</a></span>
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
				<a href="#formsub">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					<span class="text">系统设置</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="formsub">
               		<li><a href="<?php echo U('Config/site');?>">站点设置</a></li>
                    <li><a href="<?php echo U('Config/dist');?>">分销设置</a></li>
					<li><a href="<?php echo U('Config/yyb');?>">优云宝设置</a></li>
                    <li><a href="<?php echo U('Config/charge');?>">充值赠送设置</a></li>
					<li><a href="<?php echo U('Config/send');?>">打赏赠送设置</a></li>
					<li><a href="<?php echo U('Config/ads');?>">广告设置</a></li>					
					<li><a href="<?php echo U('Config/user');?>">修改密码</a></li>
                </ul>
            </li>

			<li>
				<a href="#gzh">
					<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
					<span class="text">公众号设置</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="gzh">
					<li><a href="<?php echo U('Config/mp');?>">公众号配置</a></li>
					<li><a href="<?php echo U('Autoreply/index');?>">自动回复管理</a></li>
                    <li><a href="<?php echo U('Selfmenu/index');?>">公众号菜单管理</a></li>
					<li><a href="<?php echo U('Config/share');?>">微信分享设置</a></li>
                </ul>
            </li>
		
			
			<li>
				<a href="#finance" class="elements">
					<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
					<span class="text">系统财务</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="finance">
				    <li><a href="<?php echo U('Withdraw/index');?>">用户提现管理</a></li>
				    <li><a href="<?php echo U('Charge/index');?>">用户充值记录</a></li>
					<li><a href="<?php echo U('Finance/share');?>">用户分享获币记录</a></li>
					<!--li><a href="<?php echo U('Finance/pay');?>">一键转账</a></li-->
					<!--li><a href="<?php echo U('Finance/deposit_log');?>">转账记录</a></li-->
					<li><a href="<?php echo U('Finance/finance_log');?>">用户账户变动记录</a></li>
					<li><a href="<?php echo U('Finance/separate_log');?>">代理佣金分成记录</a></li>					
					<!--li><a href="<?php echo U('Finance/mch_pay_log');?>">转账记录</a></li--->
                </ul>
            </li>
			
					
			
			<li>
				<a href="#user" class="typo">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<span class="text">用户管理</span>
				</a>
				
				<span class="arrow"></span>
				<ul id="user">
					<li><a href="<?php echo U('User/index');?>">用户信息管理</a></li>
					<li><a href="<?php echo U('Report/index');?>">用户新增报表</a></li>
					<li><a href="<?php echo U('Tree/index');?>">用户树形关系</a></li>
                </ul>
				
            </li>
           
			<!-- <li>
				<a href="#gbal" class="support">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<span class="text">股东分红</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="gbal">
					<li><a href="<?php echo U('Reward/index');?>">分红记录</a></li>
					<li><a href="<?php echo U('Reward/edit');?>">发放分红</a></li>
                </ul>
            </li> -->
			
			
			
			<li>
				<a href="<?php echo U('Member/index');?>">
					<span class="glyphicon glyphicon-eur" aria-hidden="true"></span>
					<span class="text">代理管理</span>
				</a>
            </li>
			
			
			<li>
				<a href="<?php echo U('Notice/index');?>" class="editor">
					<span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
					<span class="text">公告管理</span>
				</a>
            </li>
			
			<li>
				<a href="<?php echo U('Custom/index');?>" class="typo">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<span class="text">群发消息</span>
				</a>
            </li>
			
			<li>
				<a href="<?php echo U('Jub/index');?>" class="typo">
					<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
					<span class="text">举报管理</span>
				</a>
            </li>
			
			
			<li>
				<a href="#book" class="elements">
					<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
					<span class="text">小说管理</span>
				</a>
				<span class="arrow"></span>
            	<ul id="book">
					<li><a href="<?php echo U('Config/xbanner');?>">轮播图设置</a></li>
					<li><a href="<?php echo U('Config/bookcate');?>">分类设置</a></li>
               		<li><a href="<?php echo U('Book/index');?>">小说管理</a></li>
                </ul>
            </li>
		
			<li>
				<a href="#mh" class="elements">
					<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
					<span class="text">漫画管理</span>
				</a>
				<span class="arrow"></span>
            	<ul id="mh">
					<li><a href="<?php echo U('Config/banner');?>">轮播图设置</a></li>
					<li><a href="<?php echo U('Config/mhcate');?>">分类设置</a></li>
               		<li><a href="<?php echo U('Product/index');?>">漫画管理</a></li>
                </ul>
            </li>
			<li>
				<a href="#ysbook" class="elements">
					<span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>
					<span class="text">听书管理</span>
				</a>
				<span class="arrow"></span>
            	<ul id="ysbook">
					<li><a href="<?php echo U('Config/ybanner');?>">轮播图设置</a></li>
					<li><a href="<?php echo U('Config/yook');?>">分类设置</a></li>
               		<li><a href="<?php echo U('Yook/index');?>">听书管理</a></li>
                </ul>
            </li>
            <!--li>
				<a href="<?php echo U('Video/index');?>" class="typo">
					<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
					<span class="text">动漫管理</span>
				</a>
            </li-->
			
			
			
			
			<li>
				<a href="#Chapter" class="elements">
					<span class="glyphicon glyphicon-import" aria-hidden="true"></span>
					<span class="text">文案制作</span>
				</a>
            	<span class="arrow"></span>
            	<ul id="Chapter">
					<li><a href="<?php echo U('Chapter/index');?>">漫画文案</a></li>
               		<li><a href="<?php echo U('Bhapter/index');?>">小说文案</a></li>
                </ul>
            </li> 
			<li>
				<a href="<?php echo U('Chapurl/index');?>" class="addons">
					<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
					<span class="text">文案链接</span>
				</a>
            </li>
			
			
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
    <div class="centercontent">
		
        <div class="pageheader notab">
            <h1 class="pagetitle">充值赠送设置</h1>
            <span class="pagedesc">设置用户充值金额对应的书币赠送量。</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper lineheight21">
        
        
            <form class="stdform stdform2" method="post">
				<div class="tableoptions">                    
					<input type="button" class="radius3" onclick="add_level()" value="增加充值设置"/>
				</div><!--tableoptions-->
				<table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                    <thead>
                        <tr>
                            <th rowspan="1" class="head1">充值金额</th>
							<th colspan="1" class="head1">赠送书币</th>
							<th colspan="1" class="head1">是否热门</th>
							<th rowspan="1" class="head1">操作</th>
						</tr>
                    </thead>
                    <tbody>
						
                    	<?php if(is_array($_charge)): $i = 0; $__LIST__ = $_charge;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="background:#fff">
								<td><input type="text" name="money[]" value="<?php echo ($vo["money"]); ?>" /></td>
								<td><input type="text" name="send[]" value="<?php echo ($vo["send"]); ?>" /></td> 
								<td>
									<select name="ishot[]" default="<?php echo ($vo["ishot"]); ?>">
										<option value="1">开启</option>
										<option value="0">关闭</option>
									</select>
								</td>							
								<td><a href="javascript:;" onclick="del_level(this)">删除</a></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
				<script>
				function add_level(){
					//return false;
					html = '<tr style="background:#fff">'
                           +' <td><input type="text" name="money[]" value="" /></td>'
                           +' <td><input type="text" name="send[]" value="" /></td>'
						   +' <td>'
						   +'	<select name="ishot[]" default="">'
							+'		<option value="1">开启</option>'
							+'		<option value="0">关闭</option>'
							+'	</select>'
							+'</td>'
							+'<td><a href="javascript:;" onclick="del_level(this)">删除</a></td>'
                        +'</tr>';
					
					jQuery("#table2").find("tbody").append(html);
				}
				
				function del_level(obj){
					jQuery(obj).parent("td").parent("tr").remove();
				}

				jQuery(document).ready(function(e) {
				   //调整下拉的默认选择
				   jQuery("select").each(function(index, element) {
					  jQuery(element).find("option[value='"+jQuery(this).attr('default')+"']").attr('selected','selected');
				   });
				 });
				</script>
				<p class="stdformbutton">
					<button class="submit radius2">提交</button>
					<input type="reset" class="reset radius2" value="重置" />
				</p>
			</form>
        
        
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