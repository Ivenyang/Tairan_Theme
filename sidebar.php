<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside class="grid-1-4" id="secondary" role="complementary">
    <?php if(!is_mobile()) :?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSearch', $this->options->sidebarBlock)): ?>
    <section class="widget widget_search">
        <h3>官方微博</h3>
<div><iframe width="100%" height="85" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=0&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=0&isFans=0&uid=2703776721&verifier=26e46324&dpc=1"></iframe>
</div>
    </section>
    <?php endif; ?> 
<?php endif; ?> 

    <?php if(!is_mobile()) :?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSearch', $this->options->sidebarBlock)): ?>
    <section class="widget widget_search">
        <h3>官方微信</h3>
<p style="text-align: center;">
<a href="#">
                                            <img src="http://www.tairan.com/usr/uploads/2016/02/1799899228.jpg" width="200" height="200"/>
                                        </a>
</p>
    </section>
    <?php endif; ?> 
<?php endif; ?> 

 <?php if(!is_mobile()) :?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSearch', $this->options->sidebarBlock)): ?>
    <section class="widget widget_search">
        <h3>官方QQ群</h3>
<div><p>
    Quick引擎社区版 公测群：146069008
</p>
<p>
    <br/>
</p>
<section class="wx96Diy" data-source="bj.96weixin.com">
    
			
    <p>
        泰然VR虚拟现实群：62910807<img src="http://www.tairan.com/usr/uploads/2016/02/2970516373.gif"/>
    </p>
</section>
<p>
    <br/>
</p>
<p>
    泰然网手游开发官方群：222952691
</p>
<p>
    <br/>
</p>
<p>
    独立游戏人：190864061<img src="http://www.tairan.com/usr/uploads/2016/02/870960652.gif"/>
</p>
<p>
    <br/>
</p>
</div>
    </section>
    <?php endif; ?> 
<?php endif; ?> 

    <?php if(!is_mobile()) :?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSearch', $this->options->sidebarBlock)): ?>
    <section class="widget widget_search">
        <h3>文章搜索</h3>
        <form id="search" method="post" action="./" role="search">

            <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
        </form>
    </section>
    <?php endif; ?> 
<?php endif; ?> 
 
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <section class="widget widget-category type-post">
            <h3>文章分类</h3>
            <ul class="widget-list">
                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                <?php while ($category->next()): ?>
                <li<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?>>
                    <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?><em>(<?php $category->count(); ?>)</em></a>
                    <?php endwhile; ?></li>
            </ul>
        </section>
    <?php endif; ?>
   <div class="fixsidebar"> 
<?php if(!is_mobile()) :?>

 <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowTags', $this->options->sidebarBlock)): ?>
    <section class="widget widget-tag">
        <h3>热门标签</h3>
        <div class="tag-cloud">
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=true&limit=15') ->parse('<a href="{permalink}" class="tag-link-{count}" title="{count}个话题" style="font-size: 14px;">{name} ({count})</a>'); ?>
        </div>
    </section>
     <?php endif; ?>
<?php endif; ?>   
    <!-- 只在首页显示 -->

</div>
    <div id="fixed"></div>
</aside><!-- end #sidebar -->