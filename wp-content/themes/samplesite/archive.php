<head>
<meta charset="UTF-8">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
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
<title>SAMPLE SITE</title>
 <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
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
            <div id="cont_left">
                <div class="information">
                    <h2>Blog</h2>
                    <dl class="blog">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <div class="b_img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg">
                        <?php endif; ?>
                        </div>
                        <div class="b_right"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></dd>
                        <?php endwhile; endif; ?>
                        <?php wp_pagenavi(); ?>
                    </dl>
                </div>
                <div class="information">
                    <h2>INFORMATION</h2>
                    <dl>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?> </span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました</dd>
                    <?php endwhile; endif; ?>
                    <?php wp_pagenavi(); ?>
                    </dl>
                </div>
            </div>
            </div>
            <div id="cont_right">
                <div class="sub-menu">
                    <h3>SERVICE</h3>
                    <h4>Web事業</h4>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>service#s1">ホームページ制作</a></li>
                        <li><a href="<?php echo home_url(); ?>service#s2">エンジニア派遣</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
</body>