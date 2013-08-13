<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <?php // Styles and fonts ?>
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('css/base.min.css'); ?>">
    <link rel="stylesheet/less" type="text/css" href="<?php echo theme_url('css/main.less'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    
    <?php // Facebook Open graph support ?>
    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if(customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>
        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>

</head>

<body class="<?php echo body_class(); ?>">
    <div class="page wrapper">        
        <button type="button" class="menu-button">
            <svg width="26" height="26">
                <path d="M0,8 26,8" stroke="#fff" stroke-width="4"></path>
                <path d="M0,15 26,15" stroke="#fff" stroke-width="4"></path>
                <path d="M0,22 26,22" stroke="#fff" stroke-width="4"></path>
            </svg>
        </button>
        <aside class="assistive-nav fade perspective" role="complementary" aria-hidden="false">
            <h1>
                <a href="<?php echo base_url(); ?>" title="Ir donde todo empieza">
                    <span class="hide-text"><?php echo site_name(); ?></span>
                </a>
            </h1>
            <p><?php echo site_description(); ?></p>

            <?php if(has_menu_items()): ?>
                <nav role="navigation">
                    <ul>
                        <?php while(menu_items()): ?>
                            <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                                <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                                    <?php echo menu_name(); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </aside>


