<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link href="<?php $this->options->themeUrl('bootstrap-3.3.5-dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- 使用url函数转换相关路径 -->
    <!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>"> -->
    <!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('assets/js/ie8-responsive-file-warning.js'); ?>"></script>
    <![endif]-->
    <script src="<?php $this->options->themeUrl('assets/js/ie-emulation-modes-warning.js'); ?>"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('../font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/xrk.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/footer.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <p class="bg-danger browsehappy">当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://bhl.me/index.php/archives/121/">升级你的浏览器</a>.</p>
<![endif]-->

<div class="site-wrapper">
  <div class="top-wrapper">
    <div class="nav top-nav">
      <ul class="nav masthead-nav">
          <li><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

          <!--如果此处调用分类，及下拉菜单为分类项目，请删除此处注释即可。-->
          <li class="dropdown"> <a class="dropdown-toggle bhl_dropdown" data-toggle="dropdown" href="/"> 分类 <i class="fa fa-caret-down"> </i> </a>
          <ul class="dropdown-menu bhl_dropdown-menu" role="menu">
          <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
          <?php while ($category->next()): ?>
          <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
          <?php endwhile; ?>
          </ul>
          </li>
          <!--如果此处调用分类，及下拉菜单为分类项目，请删除此处注释即可。-->

          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
            <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
          <?php endwhile; ?>

      </ul>
      
      <ul class="blog-menu">
        <?php if($this->user->hasLogin()): ?>
            <li><a href="<?php $this->options->adminUrl(); ?>"> <i class="fa fa-user"> </i> <?php $this->user->screenName(); ?></a></li>
            <li><a href="<?php $this->options->logoutUrl(); ?>"> <i class="fa fa-sign-out"> </i> <?php _e('退出'); ?></a></li>
        <?php else: ?>
          <?php if($this->options->allowRegister==1): ?>
            <li><a class="login" href="<?php $this->options->adminUrl('register.php'); ?>"><i class="fa fa-user"></i> <?php _e('注册 '); ?></a></li> 
          <?php endif; ?>
            <li><a href="<?php $this->options->adminUrl('login.php'); ?>"> <i class="fa fa-sign-in"> </i> <?php _e('登录'); ?></a></li>
        <?php endif; ?>
      </ul>

    </div> <!-- .nav -->
    <div class="main_title">
      <h1>欢迎您访问向日葵心理网</h1>
      <p class="lead">很多时候，你需要的也许只是一个好的倾听者，最好他（她）能替你保密！很多时候，你明白，你懂得，但还是想说给谁听，那时的你需要的也许是一份安慰！<br>
      我们是向日葵心理网，我们热心、温暖、积极向上，我们关心你的心理健康！</p>
      <p class="lead">
          <a href="#consulters" class="btn btn-lg btn-default btn-inverted btn-white">联系咨询师</a>
      </p>
    </div>
  </div> <!-- .top-wrapper -->

    
    
