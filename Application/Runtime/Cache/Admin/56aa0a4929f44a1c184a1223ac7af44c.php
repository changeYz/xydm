<?php if (!defined('THINK_PATH')) exit();?>
<div style="text-align:center;">
	<img src="<?php echo ($info["qrcode"]); ?>" />
</div>
<div style="text-align: center;width: 60%;margin: 0 auto;overflow: hidden;word-break: break-all;word-wrap: break-word;">
	<?php echo ($info["url"]); ?>
</div>