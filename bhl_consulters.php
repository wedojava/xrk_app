<?php
/**
 * 自定义咨询师页面
 *
 * @package custom
 */
$this->need('header.php');
?>
<div class="container">
	<h3>现有咨询师</h3>
	<hr>
	<?php HuifengMembers_Plugin::output('SHOW_MIX') ?>
</div>
<div class="col-mb-12 col-8">
	<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>

