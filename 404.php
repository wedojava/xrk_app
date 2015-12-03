<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="container col-md-8 col-md-offset-2">

        <div class="error-page">
            <h1 class="img_404"><img src="<?php $this->options->themeUrl('img/404.png'); ?>"></h1>
            <h1 class="post-title"><?php _e('页面没找到'); ?></h1>
            <p class="404"><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看? :) '); ?></p>
            <form id="search" method="post" class="input-group col-md-8 col-md-offset-2" role="search">
                <input type="text" class="form-control" placeholder="请输入关键字" name="s" id="s" autofocus >
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
                </span>
                <!-- <button type="submit" class="btn btn-default">搜索</button> -->
            </form><!-- /input-group -->
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
