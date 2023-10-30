<?php get_header(); ?>
<?php if ( is_home() || is_front_page() ) : ?>
    <meta name="description" content="<?php bloginfo('description'); ?>"><title><?php bloginfo('name'); ?></title>
<?php elseif( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>"><title><?php bloginfo('name'); ?></title>
<?php elseif( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>"><title><?php bloginfo('name'); ?></title>
<?php elseif( is_singular() ): ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>"><title><?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
<?php endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<script type="text/javascript">
$(function() {
    $('#slide').slideshow({
        autoSlide    : true,
        effect       : 'fade',
        type         : 'repeat',
        interval     : 2000,
        duration     : 500,
        imgHoverStop : true,
        navHoverStop : true
    });
});
</script>
<header>
        <div class="container">
            <?php if( strtotime(get_the_date('Y-m-d')) < strtotime('2023-10-15') ): ?>
            <h1><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE WEB SITE" /></a></h1>
            <?php else : ?>
            <style>
                @keyframes loop{
                    0%{
                        transform: scale3d(1, 1, 1) translate3d(20px, 0px, 20px);
                    }
                    25%{
                        transform: scale3d(0, 0, 0) translate3d(0px, 0px, 0px);
                    }
                    50%{
                        transform: scale3d(-1, -1, 1) translate3d(-20px, 0px, -20px);
                    }
                    75%{
                        transform: scale3d(0, 0, 0) translate3d(0px, 0px, 0px);
                    }
                    100%{
                        transform: scale3d(1, 1, 1) translate3d(20px, 0px, 20px);
                    }
                }
                h1 img{
                    font-size: 40px;
                    animation: loop 600s ease infinite;
                }
            </style>
            <h1><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE WEB SITE" /></a></h1>
            <?php endif; ?>
            <div id="menu">
                <ul>
                    <li class="home"><a href="<?php echo home_url(); ?>/">TOP</a></li>
                    <?php wp_nav_menu( array(
                        'theme_location'=>'place_global',
                        'container' =>'',
                        'menu_class' =>'',
                        'items_wrap' => '%3$s',
                        ));?>
                </ul>
            </div>
        </div>
    </header>
    <?php wp_head(); ?>