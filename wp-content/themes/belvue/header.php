<!DOCTYPE html>
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if IE]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic|Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
    <script>
        if (/*@cc_on!@*/false) {
            document.documentElement.className+=' ie10';
        }
    </script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" <?php body_class(); ?>>
<header  class="navbar navbar-fixed-top" role="navigation">
    <div class="top">
        <div class="container tools">
            <div class="row">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                </a>
                <?php do_action('icl_language_selector'); ?>
                <?php get_search_form(); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'user', 'menu_class' => '', 'container' => '', 'menu_id' => '', ) ); ?>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="collapse navbar-collapse navbar-main-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav navbar-nav', 'container' => '', 'menu_id' => '', ) ); ?>
            </nav>
            <ul class="tabs book-button">
                <li><a data-toggle="modal" data-target="#reservation" href="#"><?php _e('book a room','belvue')?></a></li>
            </ul>
        </div>
    </div>
    <div class="white-spacer"></div>
</header>
<main>
