<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<?php // Infinite Scroll ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/2.1.0/jquery.infinitescroll.min.js"></script>

</head>
<body <?php body_class(); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
<div id="wrapper">
<?php // カスタムメニューを表示 ?>
<header>
	<div class="site-meta">
		<p class="site-description">TJカゴシマの生活応援サイト</p>
		<div class="wrap-sns">
			<ul>
				<li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
				<li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
				<li><i class="fa fa-instagram" aria-hidden="true"></i></li>
			</ul>
		</div>
	</div>
	<nav class="navbar">
		<div class="container">
			<div class="navbar-header">
				<!-- <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sp.png" width="50%" height="50%"></a> -->
				<a class="navbar-brand" href="<?php echo home_url(); ?>/">カゴシマプラス</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wrap-gnav" aria-expanded="false">
				<?php
					// if(is_mobile()){
					// 	echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#snav" aria-expanded="false">';
					// } else {
					// 	echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gnav" aria-expanded="false">';
					// }
				?>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="wrap-gnav" class="collapse navbar-collapse">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'グローバルナビ1',
						'container_id'    => 'gnav',
						'container_class' => '',
						'menu' => 'g_menu1',
						'menu_class'=> 'nav navbar-nav',
						'walker' => new wp_bootstrap_navwalker()
					));
					wp_nav_menu(array(
						'theme_location' => 'g_menu_info',
						'container_id'    => 'g_menu_info',
						'container_class' => '',
						'menu' => 'g_menu_info',
						'menu_class'=> 'nav navbar-nav',
						'walker' => new wp_bootstrap_navwalker()
					));
					wp_nav_menu(array(
						'theme_location' => 'g_menu_company',
						'container_id'    => 'g_menu_company',
						'container_class' => '',
						'menu' => 'g_menu_company',
						'menu_class'=> 'nav navbar-nav',
						'walker' => new wp_bootstrap_navwalker()
					));
				?>
			</div>
		</div>
	</nav>
</header>