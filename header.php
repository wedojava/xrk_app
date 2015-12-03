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
    <!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('assets/js/ie8-responsive-file-warning.js'); ?>"></script>
    <![endif]-->
    <script src="<?php $this->options->themeUrl('assets/js/ie-emulation-modes-warning.js'); ?>"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('../font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/archive.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/comment.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/footer.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <p class="bg-danger browsehappy">当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://bhl.me/index.php/archives/121/">升级你的浏览器</a>.</p>
<![endif]-->

<div class="site-wrapper">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  href="<?php $this->options->siteUrl(); ?>">向日葵心理网</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Link</a></li> -->
          <!-- <li><a href="#">Link</a></li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">分类 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
               <!--如果此处调用分类，及下拉菜单为分类项目，请删除此处注释即可。-->

              <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
              <?php while ($category->next()): ?>
              <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
              <?php endwhile; ?>

              <!--如果此处调用分类，及下拉菜单为分类项目，请删除此处注释即可。-->
            </ul>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
              <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
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
<!--         <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="搜索......">
          </div>
          <button type="submit" class="btn btn-default">搜索</button>
        </form> -->
        <form id="search" method="post" action="./" class="navbar-form navbar-right search-form" role="search">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="请输入关键字" name="s" id="s">
          </div>
            <button type="submit" class="btn btn-default">搜索</button>
        </form>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav> <!-- .nav -->

    
    
