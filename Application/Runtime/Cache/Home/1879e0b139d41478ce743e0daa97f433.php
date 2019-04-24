<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<title>尴尬的姐夫-评论</title>
<link href="/Public/home/mhcss/mui.css" rel="stylesheet">
<link href="/Public/home/mhcss/iconfont.css" rel="stylesheet">
<link href="/Public/home/mhcss/icons-extra.css" rel="stylesheet">
<link href="/Public/home/mhcss/common.css" rel="stylesheet">
<link href="/Public/layer/skin/layer.css" rel="stylesheet">
<script type="text/javascript" src="/Public/home/mhjs/jquery.js"></script>
<script type="text/javascript" src="/Public/layer/layer.js"></script>
</head>
<body class="mui-ios mui-ios-9 mui-ios-9-1 mui-ios-11 mui-ios-11-0">
<div class="comment">
	<ul class="mui-table-view">
		<li class="mui-table-view-cell mui-media">
		<img class="mui-media-object mui-pull-left cover" src="<?php echo ($info["cover_pic"]); ?>">
		<div class="mui-media-body">
                    <?php echo ($info["title"]); ?>
			<button onclick="showComment()" class="mui-pull-right comment-btn">评论</button>
			<p>
                       <?php echo ($info["author"]); ?>
				<span><?php echo ($counts); ?></span>人评论
			</p>
		</div>
		</li>
	</ul>
	<ul class="mui-table-view data-ul">
		<li class="mui-table-view-cell mui-media">
                最新评论
		</li>
		<?php if($list): if(is_array($list)): foreach($list as $key=>$v): ?><li class="mui-table-view-cell mui-media">
					<img class="mui-media-object mui-pull-left" src="<?php echo ($v["headimg"]); ?>">
					<div class="mui-media-body">
								<?php echo ($v["content"]); ?>
						<span class="mui-pull-right">2018-03-12</span>
					</div>
				</li><?php endforeach; endif; ?>
		<?php else: ?>
			<li class="mui-table-view-cell" style="text-align: center; font-size: 14px;">
				暂无评论！
			</li><?php endif; ?>
		
	</ul>
</div>
<div class="layer-out">
	<div class="layer-in">
		<form id="forms">
			<input type="hidden" name="id" value="<?php echo ($info['id']); ?>" />
			<input type="hidden" name="type" value="<?php echo ($_GET['type']); ?>" />
			<textarea id="content" rows="4" placeholder="请输入评论" name="content"></textarea>
			<input class="mui-btn" onclick="hideComment()" value="关闭" type="button">
			<input style="cursor: pointer;" onclick="submitForm()" class="mui-btn mui-btn-success" value="评论" type="button">
		</form>
	</div>
</div>
<style>
	.layui-layer{width:80%;left:10%;}
</style>
<script>
    function showComment() {
        $(".layer-out").show();
    }
    function hideComment() {
        $(".layer-out").hide();
    }
    var wait = true;
    function submitForm() {
        if (wait) {
			wait = false;
			var data = $('#forms').serialize();
			$.post("<?php echo U('Book/addComment');?>", data, function (data) {
				hideComment();
				$('#content').val("")
				wait = true;
				console.log(data);
				if (data.status == 1) {
					layer.alert('评论成功！',function(d){
						location.reload();
					});
				} else {
					layer.msg(data.info);
				}
			});
		}
    }
    //==================================================
    var page = 2;
    var flag = false;
    $(document).on('scroll', function () {
        if (flag) return;
        var wScrollY = window.scrollY; // 当前滚动条位置
        var wInnerH = window.innerHeight; // 设备窗口的高度（不会变）
        var bScrollH = document.body.scrollHeight; // 滚动条总高度
        if (wScrollY + wInnerH + 10 >= bScrollH) {
            flag = true;
            $.ajax({
                url: "<?php echo U('Book/loadComment');?>",
                type: 'post',
				data: {id:"<?php echo ($info['id']); ?>",type:"<?php echo ($_GET['type']); ?>",page:page},
                success: function (d) {
					console.log(d);
                    if (d.status === 1) {
                       $(".data-ul").append(d.info);
                        page++;
                        flag = false;
                    }
                }
            });
        }
    });
    
    </script>
</body>
</html>