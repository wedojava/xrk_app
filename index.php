<?php
/**
 * 基于默认皮肤构建
 * 
 * @package XRK Theme 
 * @author 白瀚龙
 * @version 0.1
 * @link http://bhl.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header_home.php');
 ?>

      <div class="main-wrapper">
        <div class="container">

          <div class="row bhl-row">
            <div class="col-md-6 bhl_title_middle">
              <h1><img src="<?php $this->options->themeUrl('img/heart.png'); ?>"></h1>
              <h1>心灵感悟</h1>
              <div class="bhl_content bhl_ellipsis_32em">
                <?php $this->widget('Widget_Archive@ganwu', 'pageSize=5&type=category', 'mid=1')->parse('<li><a href="{permalink}" title="{title}">{title}</a></li>'); ?>
              </div>
              <a class="btn btn-lg btn-primary" href="http://xrk.app/index.php/category/ganwu/">查看更多</a>
            </div>
            
            <div class="col-md-6 bhl_title_middle bhl_border_left">
              <h1><img src="<?php $this->options->themeUrl('img/rocket.png'); ?>"></h1>
              <h1>开心家园</h1>
              <div class="bhl_content bhl_ellipsis_32em">
                <?php $this->widget('Widget_Archive@jiayuan', 'pageSize=5&type=category', 'mid=2')->parse('<li><a href="{permalink}"  title="{title}">{title}</a></li>'); ?>
              </div>              
              <a class="btn btn-lg btn-primary" href="http://xrk.app/index.php/category/jiayuan/">查看更多</a>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- .main-wrapper -->

      <div class="main-wrapper bhl_feature">
        <div class="container">

          <div class="row bhl-row">
            <div class="col-md-5 bhl_title_middle">
              <h1><img src="<?php $this->options->themeUrl('img/book.png'); ?>"></h1>
              <h1><a href="http://xrk.app/index.php/category/xueyuan/">心理学院</a></h1>
            </div>
            <div class="col-md-7 bhl_content bhl_text_left bhl_ellipsis_45em">
                <?php $this->widget('Widget_Archive@xueyuan', 'pageSize=5&type=category', 'mid=3')->parse('<li><a href="{permalink}" title="{title}">{title}</a></li>'); ?>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- .main-wrapper -->

      <div class="main-wrapper">
        <div class="container">
          <div class="row bhl-row">
            <div class="col-md-5 bhl_title_middle">
              <h1><img src="<?php $this->options->themeUrl('img/lab.png'); ?>"></h1>
              <h1><a href="http://xrk.app/index.php/category/ceshi/">趣味测试</a></h1>
            </div>
            <div class="col-md-7 bhl_content bhl_text_left bhl_ellipsis_45em">
                <?php $this->widget('Widget_Archive@ceshi', 'pageSize=5&type=category', 'mid=4')->parse('<li><a href="{permalink}" title="{title}">{title}</a></li>'); ?>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- .main-wrapper -->

      <div id="consulters" class="main-wrapper bhl_padding_bottom">
        <div class="container">
          <div class="row">
            <h4 class="bhl_divider">
              咨询师
            </h4>
            <div class="bhl_avatars">
              <?php HuifengMembers_Plugin::output('SHOW_POP') ?>
            </div>

          </div>
        </div>
      </div> <!-- .main-wrapper -->

      <div class="main-wrapper bhl_feature bhl_padding bhl_border">
        <div class="container">
          <div class="row">
            <p>内容太多找不到想要的内容？请使用搜索获取更准确的信息。 </p>
            <form id="search"  method="post" action="./" class="col-md-8 col-md-offset-2 search-form" role="search">
              <div class="form-group form-group-lg col-md-10" style="padding-right: 0;">
                <input type="search" class="form-control" data-validate="text" placeholder="请输入关键字" name="s" id="s">                
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-lg btn-black">搜索</button>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .main-wrapper -->
<?php $this->need('footer.php'); ?>
