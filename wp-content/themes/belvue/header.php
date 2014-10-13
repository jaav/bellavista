<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic|Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" <?php body_class(); ?>>
<header  class="navbar navbar-fixed-top" role="navigation">
    <div class="top">
        <div class="container tools">
            <div class="row">
                <?php get_search_form(); ?>
                <?php if (function_exists('qts_language_menu') ) qts_language_menu('image'); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'user', 'menu_class' => '', 'container' => '', 'menu_id' => '', ) ); ?>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php if ( get_theme_mod( 'belvue_logo' ) ) : ?>
                        <img src='<?php echo esc_url( get_theme_mod( 'belvue_logo' ) ); ?>' alt='<?php bloginfo( 'name' ); ?>'>
                    <?php else : ?>
                        <?php bloginfo( 'name' ); ?>
                    <?php endif; ?>
                </a>
            </div>
            <nav class="collapse navbar-collapse navbar-main-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav navbar-nav', 'container' => '', 'menu_id' => '', ) ); ?>
            </nav>
        </div>
    </div>
    <div class="container book">
        <div class="row">
            <h2><?php bloginfo( 'name' ); ?></h2>
            <ul class="tabs">
                <li><a href="/reservations">book a room</a></li>
                <li class="visible-sm"><a href="#">book for today</a></li>
                <li class="visible-sm"><a href="#">book for tomorrow</a></li>
            </ul>
        </div>
    </div>
</header>
<main>
