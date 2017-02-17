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
    <?php echo $this->Html->css( array('bootstrap.min', 'font-awesome.min', 'main' )); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $this->Html->script( array('jquery.min', 'bootstrap.min', 'jquery.validate' )); ?>
 	</head>
 	<body>

    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<?php 
			 $demo_url = explode("/",  $_SERVER['REQUEST_URI']);
			 $uri = end( $demo_url );
			?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == '') echo "class='active'"; ?>><a href="<?php echo BASE_PATH; ?>">Home</a></li>
					<li <?php if($uri == 'farmer_donkey') echo "class='active'"; ?>><a href="<?php echo BASE_PATH.'farmer_donkey'; ?>">Farmer and His Donkey</a></li>
					<li <?php if($uri == 'never_quit') echo "class='active'"; ?>><a href="<?php echo BASE_PATH.'never_quit'; ?>">Never Quit</a> </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Welcome 
							
						<?php if(!empty($name)) { ?>
							<?php echo $name; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="<?php echo BASE_PATH.'account'; ?>">My Account</a> </li>
							<li class="divider"></li>
							<li style="background: #e67e22; color:#fff"> <a href="<?php echo BASE_PATH.'logout'; ?>">Logout</a> </li>
						</ul>
						<?php } ?>
					</li>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	
	<div class="content">
		<?php if ( $this->Session->check( 'Message.success' ) ) { ?>
			<?php echo $this -> Session -> flash('success'); ?>
		<?php } ?>
		<?php if ( $this->Session->check( 'Message.error' ) ) { ?>
			<?php echo $this -> Session -> flash('error'); ?>
		<?php } ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<div class="clearfix"></div>
	<div class="well text-center">
		<p> Back To Tutorial - <a href="#"> CakePHP Auth Component Login Tutorial</a></p>
	</div>
	<div class="clearfix"></div>
	<!-- Footer -->
    <footer>
    	<div class="container-fluid">
    		<p class="text-center">Copyright by <a href="http://smarttutorials.net/" target="_blank">smarttutorials.net</a> 2014</p>
    	</div>
    </footer>
    <!-- /Footer -->
    <input type="hidden" id='base_path' value="<?php echo BASE_PATH; ?>"/>
    <script>
		$(".message").delay(3200).fadeOut(1000);
	</script>
  </body>
</html>
