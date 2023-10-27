<head>
<meta charset="UTF-8">
<meta name="description" content="This shows post page."/>
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
<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2023-10-15') ): ?>
<body>
<style>
    body{
        font-weight:bold;
        background-color: white;
        animation: bg-color 3s infinite;
    }
    @keyframes bg-color {
        0% { background: repeating-linear-gradient(#ffffffff, #ffffffee 100px, #ffffffdd 100px, #ffffffcc 125px); }
        6.25% { background: repeating-linear-gradient(#ffffffee, #ffffffdd 100px, #ffffffcc 100px, #ffffffff 125px); }
        12.5% { background: repeating-linear-gradient(#ffffffdd, #ffffffcc 100px, #ffffffff 100px, #ffffffee 125px); }
        18.75% { background: repeating-linear-gradient(#ffffffff, #ffffffee 100px, #ffffffdd 100px, #ffffffcc 125px); }
        25% { background: repeating-linear-gradient(#ffffffee, #ffffffdd 100px, #ffffffcc 100px, #ffffffff 125px); }
        31.25% { background: repeating-linear-gradient(#ffffffdd, #ffffffcc 100px, #ffffffff 100px, #ffffffee 125px); }
        37.5% { background: repeating-linear-gradient(#ffffffff, #ffffffee 100px, #ffffffdd 100px, #ffffffcc 125px); }
        43.75% { background: repeating-linear-gradient(#ffffffee, #ffffffdd 100px, #ffffffcc 100px, #ffffffff 125px); }
        50% { background: repeating-linear-gradient(#ffffffdd, #ffffffcc 100px, #ffffffff 100px, #ffffffee 125px); }
        56.25% { background: repeating-linear-gradient(#ffffffff, #ffffffee 100px, #ffffffdd 100px, #ffffffcc 125px); }
        62.5% { background: repeating-linear-gradient(#ffffffee, #ffffffdd 100px, #ffffffcc 100px, #ffffffff 125px); }
        68.75% { background: repeating-linear-gradient(#ffffffdd, #ffffffcc 100px, #ffffffff 100px, #ffffffee 125px); }
        75% { background: repeating-linear-gradient(#ffffffff, #ffffffee 100px, #ffffffdd 100px, #ffffffcc 125px); }
        81.25% { background: repeating-linear-gradient(#ffffffee, #ffffffdd 100px, #ffffffcc 100px, #ffffffff 125px); }
        87.5% { background: repeating-linear-gradient(#ffffffdd, #ffffffcc 100px, #ffffffff 100px, #ffffffee 125px); }
        93.75% { background: repeating-linear-gradient(#ffffffff, #ffffffee 100px, #ffffffdd 100px, #ffffffcc 125px); }
        96.875% { background: repeating-linear-gradient(#ffffffee, #ffffffdd 100px, #ffffffcc 100px, #ffffffff 125px); }
        100% { background: repeating-linear-gradient(#ffffffdd, #ffffffcc 100px, #ffffffff 100px, #ffffffee 125px); }
    }
</style>
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
        <?php the_time('Y/m/d'); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
        <div id="cont_right">
                <div class="sub-menu">
                    <h3>SERVICE</h3>
                    <h4>Web事業</h4>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/service#s1">ホームページ制作</a></li>
                        <li><a href="<?php echo home_url(); ?>/service#s2">エンジニア派遣</a></li>
                    </ul>
                </div>
        </div>
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
<?php else : ?>
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
        <?php the_time('Y/m/d'); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
        <div id="cont_right">
                <div class="sub-menu">
                    <h3>SERVICE</h3>
                    <h4>Web事業</h4>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/service#s1">ホームページ制作</a></li>
                        <li><a href="<?php echo home_url(); ?>/service#s2">エンジニア派遣</a></li>
                    </ul>
                </div>
        </div>
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
<?php endif; ?>