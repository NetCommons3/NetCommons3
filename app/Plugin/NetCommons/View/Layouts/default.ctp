<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="en" ng-app="NetCommonsApp">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="/net_commons/jquery/jquery.js"></script>
	<script src="/net_commons/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/net_commons/twbs/bootstrap/assets/js/docs.min.js"></script>
	<title><?php
		if (isset($pageTitle)) {
			echo h($pageTitle);
		}
		?></title>

	<!-- Bootstrap -->
	<?php
	if (isset($bootstrapMinCss) && $bootstrapMinCss) {
		echo $this->Html->css('bootstrap.min.css');
	} else {
		?><link href="/net_commons/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><?php
	}?>

	<link href="/net_commons/twbs/bootstrap/assets/css/docs.min.css" rel="stylesheet">
	<!-- base  -->
	<link href="/net_commons/base/css/style.css" rel="stylesheet">


	<!-- themed  -->
	<?php echo $this->Html->css("style"); ?>
	<?php
		echo $this->Html->script('//tinymce.cachefly.net/4.0/tinymce.min.js');
		echo $this->Html->script('/net_commons/angular/angular.min.js');
		echo $this->Html->script('/net_commons/angular-bootstrap/ui-bootstrap-tpls.min.js');
		echo $this->Html->script('/net_commons/angular-ui-tinymce/src/tinymce.js');
		echo $this->Html->script('/net_commons/base/js/base.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
	<body>
	<!-- container-header -->
	<header id="container-header">
		<div class="box-site box-id-6">
			<!-- navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">NetCommons3</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="/"><?php echo __("ホーム"); ?></a></li>
							<li>
								<?php if ($User = AuthComponent::user()): ?>
									<?php /*echo h($User['handle'])*/ ?>
									<?php echo $this->Html->link(__('Logout'), '/auth/logout') ?>
								<?php else: ?>
									<?php echo $this->Html->link(__('Login'), '/auth/login') ?>
								<?php endif; ?>
							</li>
							<li <?php
								if (isset($this->request->params['plugin'])
									&& $this->request->params['plugin'] == 'ThemeSettings') {
								echo 'class="active"';
								}
							?>>
								<?php echo $this->Html->link(__('テーマ設定'), '/theme_settings/site/') ?>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</header>



	<div class="container">

		<?php if ($flashMss = $this->Session->flash()) { ?>
			<!-- flash -->
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $flashMss; ?>
			</div>
		<?php } ?>
		<?php echo $this->fetch('content'); ?>
	</div>

	<!-- container-footer  -->
	<footer id="container-footer" role="contentinfo">
		<div class="box-footer box-id-5">
			<div class="copyright">Powered by NetCommons</div>
		</div>
	</footer>

		<!-- /container -->
		<?php //echo $this->element('sql_dump'); ?>

	</body>
</html>
