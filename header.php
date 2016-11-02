<!--[if lte IE 8]>
    <script>(function() {
            var e = "abbr,article,aside,audio,canvas,datalist,details,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),
            i = e.length;
            while (i--) {
                document.createElement(e[i]);
            }
        } ());</script>
<![endif]-->
<!DOCTYPE html>
<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>
    <html>
        
        <head>
            <meta charset="<?php $this->options->charset(); ?>">
            <link href="<?php $this->options->themeUrl('img/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon">
            <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
            <meta name="renderer" content="webkit">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <title>
                <?php $this->archiveTitle(array( 'category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章') ), '', ' | '); ?>
                    <?php $this->options->title(); ?>
                        <?php if($this->is('index')){echo " | "; $this->options->description(); }?></title>
            <!-- 使用url函数转换相关路径 -->
            <link rel="stylesheet" href="<?php $this->options->themeUrl('skin/' . $this->options->css . '.css'); ?>">
            <!-- 通过自有函数输出HTML头部信息 -->
            <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2=&atom=&commentReply='); ?></head>
        
        <body class="<?php if(is_mobile()) {echo 'mobile-body';}?>">
            <!--[if lt IE 8]>
                <div class="browsehappy" role="dialog">
                    <?php _e( '当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
            <![endif]-->
            <div class="spinner" role="spinner">
                <div class="spinner-icon"></div>
            </div>
            <header id="header">
                <div id="menu-bar" class="container">
                    <h1 class="logo fl">
                        <a href="<?php $this->options->siteUrl(); ?>">
                            <?php $this->options->title() ?></a></h1>
                    <div class="" id="nav">
                        <nav id="nav-menu" class="clearfix" role="navigation">
                            <ul class="menu-ul">
                                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                    <li>
                                        <a href="http://www.tairan.com/tutorials" title="游戏开发" target="_blank">游戏开发</a>
                                        <div>
                                            <a href="http://www.tairan.com/category/cocos2d-x/" title="Cocos" target="_blank">Cocos</a>
                                            <a href="http://www.tairan.com/category/unity/" title="Unity" target="_blank">Unity</a>
                                            <a href="http://www.tairan.com/category/Spine/" title="Cocos" target="_blank">Spine</a>
                                            <a href="http://www.tairan.com/category/quick-cocos2d-x-cocos/" title="Quick-x" target="_blank">Quick-x</a>
                                            <a href="http://www.tairan.com/category/opengl-es/" title="OpenGL" target="_blank">OpenGL</a></div>
                                    </li>
                                    <li>
                                        <a href="http://www.tairan.com/category/xuanxue/" title="视频节目" target="_blank">视频节目</a>
                                        <div>
                                            <a href="http://www.tairan.com/category/xuanxue/" title="玄学之夜" target="_blank">玄学之夜</a>
                                            <a href="http://www.tairan.com/HomoLudens" title="游戏的人" target="_blank">游戏的人</a>
                                            <a href="http://www.tairan.com/ExtraCredits" title="额外加分" target="_blank">额外加分</a></div>
                                    </li>
                                    <li>
                                        <a href="http://www.tairan.com/category/Interview/" title="人物专访" target="_blank">人物专访</a></li>
                                    <li>
                                        <a href="http://www.tairan.com/category/VR/" title="虚拟现实" target="_blank">虚拟现实</a>
                                        <div>
                                            <a href="http://www.tairan.com/category/LearnVR/" title="入门教程" target="_blank">入门教程</a>
                                            <a href="http://www.tairan.com/category/VRTools/" title="开发工具" target="_blank">开发工具</a>
                                            <a href="http://www.tairan.com/category/VR_Art/" title="美术制作" target="_blank">美术制作</a></div>
                                    </li>
                                    <li>
                                        <a href="http://bbs.tairan.com/forum.php" title="泰然论坛" target="_blank">泰然论坛</a></li>
                                    <li>
                                        <a href="http://www.tairan.com/articles" title="资源汇总" target="_blank">资源汇总</a>
                                        <div>
                                            <a href="http://www.tairan.com/AboutVR" title="VR教程汇总" target="_blank">VR教程汇总</a>
                                            <a href="http://www.tairan.com/AboutQuick" title="Quick-x教程汇总" target="_blank">Quick-x教程汇总</a>
                                            <a href="http://www.tairan.com/category/Spine/" title="Spine教程汇总" target="_blank">Spine教程汇总</a>
                                            <a href="http://www.tairan.com/tutorials" title="游戏开发" target="_blank">游戏开发教程</a></div>
                                    </li>
                                    <li>
                                        <a href="http://www.tairan.com/about" title="关于我们" target="_blank">关于我们</a>
                                        <div>
                                            <a href="http://www.tairan.com/cocos2d-lua-book" title="官方丛书" target="_blank">官方丛书</a></div>
                                    </li>
                            </ul>
                            <?php if(is_mobile()) : ?>
                                <a href="javascript:;" class="searchicon">
                                    <img src="<?php $this->options->themeUrl('img/search.png'); ?>" alt=""></a>
                                <?php endif;?>
                                    <?php if(is_mobile()) : ?>
                                        <input type="checkbox" id="button">
                                        <label for="button" onclick=""></label>
                                        <ul>
                                            <li>
                                                <a class="waves-effect waves-button waves-classic" href="<?php $this->options->siteUrl(); ?>" id="home">
                                                    <?php _e( '首页'); ?></a>
                                            </li>
                                            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                                <?php while($pages->next()): ?>
                                                    <li>
                                                        <a href="<?php $pages->permalink(); ?>" class="waves-effect waves-button waves-classic" title="<?php $pages->title(); ?>">
                                                            <?php $pages->title(); ?></a></li>
                                                    <?php endwhile; ?></ul>
                                        <?php endif;?></nav>
                    </div>
                </div>
                <?php if(is_mobile()) : ?>
                    <div class="mb-search">
                        <form id="bmsearchform" method="post" action="./" role="search">
                            <input type="text" name="s" class="bmtext" autocomplete="on" placeholder="<?php _e('输入关键字搜索'); ?>" /></form>
                    </div>
                    <?php endif;?>
            </header>
            <!-- end #header -->
            <div id="body">
    
        </body>