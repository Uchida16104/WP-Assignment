<?php get_header(); ?>
<header>
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE WEB SITE" /></a></h1>
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