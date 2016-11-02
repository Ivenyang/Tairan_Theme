<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div id="goTop" class="<?php if(is_mobile()) {echo 'mbtop';}?>" >
	<div class="arrow"></div>
	<div class="stick"></div>
</div>
<script src="<?php $this->options->themeUrl('js/waves.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.appear.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/script.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.SuperSlide.js'); ?>"></script>
<footer id="footer" class="<?php if(is_mobile()) {echo 'mbfoot';}?>" role="contentinfo">
    Copyright&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>。
    <?php if(!is_mobile()) : ?><?php _e('内容由 <a href="http://www.tairan.com/about" target="_blank">泰然教程组</a> 提供'); ?>。 感谢 <a href="http://www.tairan.com/" target="_blank">字节猫™</a>提供开源主题。
<br ><script src="http://s11.cnzz.com/stat.php?id=3413370&web_id=3413370" language="JavaScript"></script>
<a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备13018980号-2</a>
<?php echo '加载耗时：',timer_stop(), ' s';?><?php endif;?>
</footer><!-- end #footer -->
<?php $this->footer(); ?>
<script type="text/javascript">
	// material design 图标点击效果
	  Waves.displayEffect();
</script>

<!-- 把代码贴在</body>标签之前 -->
<?php if(!is_mobile()) : ?>
<script src="http://sendcloud.sohu.com/js/subscribe.js"></script>
<script>
var option = {
    type: 'bottom',
    expires: '86400000',
    trigger: 'scroll',
    invitecode: '4526e152-39e2-440e-bb93-1f392daf89ed',
    title: '干货"抖"给你？邮件订阅我们吧！',
    successMsg: '请登录邮箱，点击确认订阅链接，即可订阅成功啦'
}
sendcloud.subscribe(option)
</script>
<?php endif;?>

</body>
</html>