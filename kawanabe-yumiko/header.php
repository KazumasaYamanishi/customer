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
<link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="//webfont.fontplus.jp/accessor/script/fontplus.js?sShks6dWSsw%3D&aa=1&ab=2" charset="utf-8"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
<div id="wrapper">

<?php // カスタムメニューを表示 ?>
<header>
    <nav class="navbar">
        <div class="container">
            <?php if(!is_mobile()): ?><h1 class="site-name hidden-xs font-f01"><?php echo bloginfo('description'); ?></h1><?php endif; ?>
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
                <?php
                    if(is_mobile()){
                        echo '<a class="nav-phone" href="tel:"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a>';
                        echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#snav" aria-expanded="false">';
                    } else {
                        echo '<div class="header-box-right text-center"><ul class="list-inline font-f01"><li><a href="' . home_url() . '/access">アクセス</a></li>';
                        echo '<li><a href="' . home_url() . '/contact"> | お問い合わせ</a></li></ul>';
                        echo '<p class="header-tel">TEL 099-267-5058</p></div>';
                        echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gnav" aria-expanded="false">';
                    }
                ?>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?php
                if(is_mobile()){
                    wp_nav_menu(array(
                        'theme_location' => 'g_menu_sp',
                        'container_id'    => 'snav',
                        'container_class' => 'collapse navbar-collapse',
                        'menu' => 'g_menu_sp',
                        'menu_class'=> 'nav navbar-nav',
                        'walker' => new wp_bootstrap_navwalker()
                    ));
                } else {
                    wp_nav_menu(array(
                        'theme_location' => 'グローバルナビ1',
                        'container_id'    => 'gnav',
                        'container_class' => 'collapse navbar-collapse',
                        'menu' => 'g_menu1',
                        'menu_class'=> 'nav navbar-nav',
                        'walker' => new wp_bootstrap_navwalker()
                    ));
                }
            ?>
        </div>
    </nav>
</header>