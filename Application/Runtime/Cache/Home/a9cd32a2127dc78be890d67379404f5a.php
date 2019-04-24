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
</style>
<?php if($list): if(is_array($list)): foreach($list as $key=>$v): ?><div class="order-item">
	<div>
		<h3>
			<span style="color:#f39800;">下单时间：<?php echo (date("Y-m-d H:i:s",$v['create_time'])); ?></span>
				<span><?php echo get_order_status($v['status']);?></span>
		</h3>
		<h3>
			<span style="float:left;">订单编号：<?php echo ($v['sn']); ?></span>
		</h3>
		<div class="order-count">
			<ul class="clr">
				<?php if(is_array($v['cart'])): foreach($v['cart'] as $key=>$val): ?><li><a href="<?php echo U('Ucenter/play',array('gid'=>$val['goods_id']));?>" target="_self" alt="点击观看"><img src="<?php echo ($val['pic']); ?>"></a></li><?php endforeach; endif; ?>
			</ul>
			<div>
				<p><?php echo ($v['count']); ?>个包裹(共<?php echo ($v['count']); ?>件)</p><p>￥<?php echo ($v['money']); ?></p>
			</div>
			<i class="iconfont icon-right"></i>
		</div>
	</div>
	
</div><?php endforeach; endif; ?>
<?php else: ?>
	<?php if($page == 1): ?><div class="swiper-s">
		<div class="swiper-no">
			<img src="/Public/home/images/empty.png" />
		</div>
		<div class="swiper-no">
			您还未购买课程
		</div>
	 </div>
	<?php else: ?>
	<div class="swiper-ss" id="common-load">
		<div class="swiper-no">
			已经加载完数据！
		</div>
	</div><?php endif; endif; ?>