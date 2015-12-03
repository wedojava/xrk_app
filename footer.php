<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
      <div class="bhl_footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h4 ><span class ="glyphicon glyphicon-info-sign"></span>&nbsp 关于 <a href="http://huifeng.me"  target="_blank"><span class ="glyphicon glyphicon-new-window"></span></a></h4>
              <br />
              <p>启用时间：2015年10月30日</p>
              <p>Design By：<a href="http://huifeng.me" target="_blank" class="item">回风.Me</a></p>
              <p>Power By：<a href="http://b.doc.app" target="_blank" class="item">Bootstrap & Typecho</a></p>
            </div>
            <div class="col-md-2">
              <h4><span class="glyphicon glyphicon-earphone"></span>&nbsp 联系我们 </h4>
              <br />
              <p>联系电话：000000</p>
              <p>办公室：asdfasdfasdf</p>
            </div>
            <div class="col-md-7">
              <h4><span class="glyphicon glyphicon-link"></span>&nbsp 链接 </h4>

              <ul class="nav nav-pills nav-justified" role="tablist">
                <?php Links_Plugin::output("SHOW_TEXT", 0, "主要") ?>
              </ul>

              <ul class="nav nav-pills nav-justified" role="tablist">
              <?php Links_Plugin::output("SHOW_TEXT", 0, "常用") ?>
              </ul>
              <h4 class="bhl_divider grey" style="margin:5px 0;">
                更多
              </h4>
              <ol class="breadcrumb">
                <?php Links_Plugin::output("SHOW_TEXT", 0, "其他") ?>
              </ol>        
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- .bhl_footer -->

    </div> <!-- .site-wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php $this->options->themeUrl('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
  </body>
</html>
