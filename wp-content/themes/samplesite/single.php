<head>
<meta charset="UTF-8">
<?php wp_head(); ?>
</head>
<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2023-10-15') ): ?>
<body>
<style>
    body{
        font-weight:bold;
        width: 100%;
        height: 100vh;
        background: linear-gradient(90deg, #fff0f0,#f0fff0,#f0f0ff);
        background-size: 200% 200%;
        animation: bg-color 20s ease infinite;
    }
    @keyframes bg-color {
        0%{background-position:0% 50%;}
        50%{background-position:100% 50%;}
        100%{background-position:0% 50%;}
    }
</style>
<?php get_header(); ?>
<?php else : ?>
<body>
<style>
    body{
        background: linear-gradient(90deg, #ffefef, transparent);
    }
</style>
<?php get_header(); ?>
<?php endif; ?>
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
            <?php the_time('Y/m/d'); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php the_tags(); ?>
<?php
$terms = get_the_terms($post->ID,array('language','programming'));
foreach( $terms as $term ) {
    echo ",".$term->name;
}
?>
<?php get_footer(); ?>
</body>