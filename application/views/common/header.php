<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ANDHRA100ACRES | Home page</title>
	<meta name="description" content="Andhra100acres is for developing good real estate environment ">
	<meta name="author" content="Venkatesh">
	<meta name="keywords" content="real-estate, andhra100acres, andhra 100 acres, andhra, properties, property, estate, yanam real-estate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' type='text/css'>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontello.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icon-7-stroke/css/helper.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css" media="screen">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/icheck.min_all.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/price-range.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.theme.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.transitions.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/customAnimination.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
	<?php /*include( 'dbConfig.php' );*/
	//	session_start();
	if ( isset( $_SESSION['uID'] ) ) {
		$uID        = $_SESSION['uID'];
		$Q_get_user = $conn->query( "select * from tbl_users where uID = '$uID' and status = '1'" );
		$user_get   = $Q_get_user->fetch_array();
	}
	/*include( 'Classes/getPropertyAll.php' );
	include( 'Classes/propertyAgriLand.php' );
	include( 'Classes/propertyCommercialBuilding.php' );
	include( 'Classes/propertyCommercialShop.php' );
	include( 'Classes/propertyFlat.php' );
	include( 'Classes/propertyCRLand.php' );
	include( 'Classes/propertyHouseVilla.php' );
	include( 'Classes/userData.php' );
	include( 'Classes/propertyAppartment.php' );*/
	?>
</head>
<body>
<!-- Body content -->
<div class="header-connect ">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-8  col-xs-12">
				<div class="header-half header-call">
					<p>
						<i class="pe-7s-call"></i> <span id="animationSandbox" class="site__title " style="font-weight: bold">+91 9014 551 553</span>
						<span><i class="pe-7s-mail"></i> support@andhra100acres.com</span>
					</p>
				</div>
			</div>
			<div class="col-md-5 col-md-offset-2 col-sm-2 col-sm-offset-2  col-xs-12">
				<div class="header-half header-social">
					<ul class="list-inline">
						<li> Welcome <?php if ( isset( $_SESSION['uID'] ) ) {
								echo preg_replace( "/\s.*$/", "", $user_get['uName'] ) . '..!';
							} else {
								echo 'Guest..!';
							} ?></li>
						<li><a href="index.php" style="font-weight: normal;"> English </a></li>
						<li> |</li>
						<li><a href="index_te.php" style="font-weight: normal;"> తెలుగు </a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="Admin/login.php" style="font-weight: normal;"> Admin </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--End top header -->
<nav class="navbar navbar-default " id="nav-menu">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php"><img src="assets/img/logo.png" style="width: 250px" alt="logo"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse yamm" id="navigation">
			<div class="button navbar-right">
				<?php if ( ! isset( $_SESSION['uID'] ) ) { ?>
					<button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.php')" data-wow-delay="0.4s"><i class="fa fa-lock"></i> Login</button>
				<?php } else { ?><a href="logout.php">
					<button class="navbar-btn nav-button wow bounceInRight lougout" data-wow-delay="0.4s">Logout</button>
				</a>
				<?php } ?>
			</div>
			<ul class="main-nav nav navbar-nav navbar-right scroll_content ">
				<li class="wow fadeInDown" data-wow-delay="0.2s"><a class="active" href="index.php">Home</a></li>
				<li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="<?php if ( isset( $_SESSION['uID'] ) ) {
						echo 'user_post_select.php';
					} else {
						echo 'register.php';
					} ?>">Post Your Property</a></li>
				<li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="coming_soon.php">Building materials</a></li>
				<li class="dropdown yamm-fw" data-wow-delay="0.4s">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Services<b class="caret"></b></a>
					<ul class="dropdown-menu ">
						<li>
							<? $this->load->view('common/services_links') ?>
							<!-- /.yamm-content -->
					</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
