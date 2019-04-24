<?php if (!defined('THINK_PATH')) exit();?><style>
.swiper-no{
    padding: 0;
    min-height: 50px;
    line-height: 50px;
    background-color: #fff;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    color: #93899E;
    margin: 0 auto;
}
.order-item .order-count ul li {
    float: left;
    width: 45%;
    padding: 0px 2px;
}
.order-item .order-count ul li img {
    width: 100%;
    height: 80px;
}
.order-item h3 span:last-child {
    float: right;
    color: #f39800;
}
.order-item {
    margin-bottom: 10px;
}
.gtitle{
		float: left;
		width: 100%;
		height: auto;
		position: absolute;
		padding-bottom: 5px;
		margin-top: -28px;
		color: #ffffff;
	}
</style>
<?php if($goods): if(is_array($goods)): foreach($goods as $key=>$v): ?><li class="sy_recmd_list">
	<div class="box">
		<div class="pub_img">
			<a href="<?php echo U('Index/goods',array('id'=>$v['id']));?>">
				<img src="<?php echo ($v['pic']); ?>" width="145" height="145">
			</a>
		</div>
		<div class="pub_wz">
			<h3 class="overflow_clear"><a href="<?php echo U('Index/goods',array('id'=>$v['id']));?>"><?php echo ($v['name']); ?></a></h3>
			<p style="color: #ca9999;font-size: 10px;">交易量：<?php echo ($v['sold']); ?></p>
			<div class="nr_box">
				<?php if($v['teacher_status']): ?><span class="fl" style="color: #B38C8C;font-weight: bold;"><?php echo ($v['teacher_name']); ?></span><?php endif; ?>
				<p class="fr price fontcl2"><span class=""><?php echo ($v['price']); ?>米粒</span></p>
			</div>
		</div>
	</div>
	<div class="">
	
	<div>
</li><?php endforeach; endif; ?>
<?php else: ?>
	<?php if($page == 1): ?><div class="swiper-s">
		<div class="swiper-no">
			<img src="/Public/home/images/empty.png" />
		</div>
		<div class="swiper-no">
			暂时没有课程数据
		</div>
	 </div>
	<?php else: ?>
	<div class="swiper-ss" id="common-load">
		<div class="swiper-no">
			已经加载完数据！
		</div>
	</div><?php endif; endif; ?>