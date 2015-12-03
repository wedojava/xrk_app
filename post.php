<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <h4 class="bhl_divider">
            <div class="post-meta">
                <i class="fa fa-user"> </i> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;&nbsp;
                <i class="fa fa-book"> </i> <?php $this->category(','); ?>&nbsp;&nbsp;
                <i class="fa fa-clock-o"> </i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
            </div>
        </h4>
        <div class="post-content container" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags container"><i class="fa fa-tags"> </i> <?php $this->tags(', ', true, '暂无标签'); ?></p>
    </article>
    <div class="post-near">
        <div class="container">
            <li class="col-md-6"><i class="fa fa-angle-left"> </i> <?php $this->thePrev('%s','<a href="javascript:;"><i class="fa fa-ban bhl_null"> </i></a>'); ?></li>
            <li class="col-md-6 right"><i class="fa fa-angle-right"></i><?php $this->theNext('%s','<a href="javascript:;"><i class="fa fa-ban bhl_null"> </i></a>'); ?></li>
        </div>
    </div>
    <?php $this->need('comments.php'); ?>


</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
