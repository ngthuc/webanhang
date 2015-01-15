<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
           <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/sl-slide.css">

    <script src="<?php echo bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory') ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo bloginfo('template_directory') ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo bloginfo('template_directory') ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo bloginfo('template_directory') ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo bloginfo('template_directory') ?>/images/ico/apple-touch-icon-57-precomposed.png">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--Header-->
<header class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="<?= home_url() ?>"></a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li class="active"><a href="<?= home_url() ?>">Trang chủ</a></li>
                    <li><a href="<?= home_url() ?>/?page_id=5">Kho giao diện</a></li>
                    <li><a href="<?= home_url() ?>/?page_id=7">Tính năng</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= home_url() ?>/?page_id=15">Dịch vụ hosting</a></li>
                            <li><a href="<?= home_url() ?>/?page_id=17">Đăng ký tên miền</a></li>
                            <li><a href="<?= home_url() ?>/?page_id=19">Thiết kế đồ họa</a></li>
                            <li><a href="<?= home_url() ?>/?page_id=21">SEO từ khóa</a></li>
                            <li><a href="<?= home_url() ?>/?page_id=23">Quản trị nội dung</a></li>
                            <li><a href="<?= home_url() ?>/?page_id=25">Quảng cáo Google Adwords</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= home_url()?>/?cat=1">Tin tức</a></li>
                    <li><a href="<?= home_url() ?>/?page_id=9">Liên hệ</a></li>
                    <li class="login">
                        <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->