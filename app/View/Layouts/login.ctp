<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Simple Authentication and Authorization Application using CakePHP Auth Component, cakephp auth login example, cakephp auth login with username or email, cakephp authcomponent login, akephp 2.x auth component example, cakephp authentication tutorial">
	<meta name="keywords" content="Simple Authentication and Authorization Application using CakePHP Auth Component, cakephp auth login example, cakephp auth login with username or email, cakephp authcomponent login, akephp 2.x auth component example, cakephp authentication tutorial">
	<meta content='FOLLOW,INDEX' name='robots'/>
	<link href='https://plus.google.com/+MuniAyothi/' rel='author'/>
	
    <title>CakePHP Auth Component Login Tutorial</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <?php echo $this->Html->css( array('bootstrap.min', 'font-awesome.min', 'login' )); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $this->Html->script( array('jquery.min', 'bootstrap.min', 'jquery.validate' )); ?>
  </head>
  <body>
	<div class="container">
		<?php echo $this->element('ads_home'); ?>
		<div class="login-form">
			<?php if ( $this->Session->check( 'Message.success' ) ) { ?>
				<?php echo $this -> Session -> flash('success'); ?>
			<?php } ?>
			<?php if ( $this->Session->check( 'Message.error' ) ) { ?>
				<?php echo $this -> Session -> flash('error'); ?>
			<?php } ?>
			
			<h1 class="text-center">Smart Tutorials</h1>
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<!-- /container -->
	<input type="hidden" id='base_path' value="<?php echo BASE_PATH; ?>"/>
	<script>
		$(".message").delay(3200).fadeOut(1000);
	</script>
	<div class="well text-center">
		<p> Back To Tutorial - <a href="#"> CakePHP Auth Component Login Tutorial</a></p>
	</div>
	<div class="clearfix"></div>
  </body>
</html>
