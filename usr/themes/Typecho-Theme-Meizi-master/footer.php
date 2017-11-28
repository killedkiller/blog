<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>模板简介</h3>
            <p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
                Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <?php if ($this->options->socialQQ): ?>
                    <a href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <?php endif; ?>
                <?php if ($this->options->socialGithub): ?>
                    <a href="<?php $this->options->socialGithub(); ?>"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <?php endif; ?>
                <?php if ($this->options->socialWeibo): ?>
                    <a href="<?php $this->options->socialWeibo(); ?>"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <?php endif; ?>
                <?php if ($this->options->socialTwitter): ?>
                    <a href="<?php $this->options->socialTwitter(); ?>"><span class="am-icon-twitter am-icon-fw blog-icon"></span></a>
                <?php endif; ?>
                <a href="<?php $this->options->feedUrl(); ?>"><span class="am-icon-rss am-icon-fw blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h1>我们站在巨人的肩膀上</h1>
            <h3>Heroes</h3>
            <p>
            <ul>
                <li>jQuery</li>
                <li>Zepto.js</li>
                <li>Seajs</li>
                <li>LESS</li>
                <li>...</li>
            </ul>
            </p>
        </div>
    </div>
    <div class="blog-text-center">© <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 Theme is <a href="https://miaoqiang.name" target="_blank">Meizi</a></div>
</footer>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="<?php $this->options->themeUrl('js/amazeui.ie8polyfill.min.js'); ?>"></script>
<![endif]-->
<script src="<?php $this->options->themeUrl('js/amazeui.min.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
