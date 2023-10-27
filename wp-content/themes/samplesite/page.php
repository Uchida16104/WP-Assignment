<head>
<meta charset="UTF-8">
<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<div id="slide">
        <ul class="slide-inner">
            <li></li>
            <li></li>
            <li></li>
        </ul>
         <div class="s-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_prev.png" alt="前へ"></div>
         <div class="s-next"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_next.png" alt="次へ"></div>
         <div class="cont-nav"></div>
    </div>
<div id="cont_first" class="container">
        <div id="contents" class="single">
        <div class="main">
        <div class="">
            <?php if(function_exists('bcn_display')) 
            {
                bcn_display();
                }?>
        </div>
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
        <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
</body>