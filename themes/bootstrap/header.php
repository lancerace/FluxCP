<?php if (!defined('FLUX_ROOT')) {
    exit;
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php if (isset($metaRefresh)): ?>
	<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
	<?php endif ?>
	<title>
		<?php echo Flux::config('SiteTitle'); if (isset($title)) {
    echo ": $title";
} ?>
	</title>



	<!-- Bootstrap core CSS !-->
	<link href="<?php echo $this->themePath('css/all.css') ?>" rel="stylesheet" type="text/css" media="all">
  	<link href="<?php echo $this->themePath('css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" media="all">
	<!-- Material Design Bootstrap !-->
	<link href="<?php echo $this->themePath('css/mdb.min.css') ?>" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $this->themePath('css/style.min.css') ?>" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
	<link href="<?php echo $this->themePath('css/sticky-footer-navbar.css') ?>" rel="stylesheet" type="text/css" media="all">

	<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
	<link href="<?php echo $this->themePath('css/custom.css') ?>" rel="stylesheet" type="text/css" media="all">
	<?php if (Flux::config('EnableReCaptcha')): ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php endif ?>


</head>

<body>

	<!-- Fixed navbar -->
	<?php include $this->themePath('main/navbar.php', true) ?>



<div class="bgimg">
  <div class="container-fluid">

        <img src=<?php echo $this->themePath('img/devilingright.png') ?> class="img-fluid" alt="deviling.jpg" style="z-index:1;position:absolute;bottom:0;left:0;">

    <!-- content wrapper !-->
    <div class="row">
      <!--left section box-->
      <div class="col-12 col-md-8">
        <div class="row">
          <div class="card maincard p-3 w-100">
            <?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
            <p class="notice">Please change your <strong>ServerAddress</strong> directive in your application config to your server's real address (e.g., myserver.com).</p>
            <?php endif ?>
            <!-- Messages -->
            <?php if ($message=$session->getMessage()): ?>
            <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
            <p class="alert alert-info">
              <?php echo htmlspecialchars($message) ?>
					</p>
					<?php endif ?>

					<!-- Sub menu -->
					<?php include $this->themePath('main/submenu.php', true) ?>

					<!-- Page menu -->
					<?php include $this->themePath('main/pagemenu.php', true) ?>

					<!-- Credit balance -->
					<?php //if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php'?>
