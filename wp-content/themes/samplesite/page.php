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
        <?php if(have_posts()): while(have_posts()): the_post();?>
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
    <footer>
        <ul>
            <li class="home"><a href="<?php echo home_url(); ?>/">TOP</a></li>
            <li><a href="<?php echo home_url(); ?>/service">SERVICE</a></li>
            <li><a href="<?php echo home_url(); ?>/company">COMPANY</a></li>
            <li><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
            <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
        </ul>
        <div id="footer">
            <div class="copyright">Copyright &copy; 2020 SAMPLE SITE All Rights Reserved.</div>
        </div>
    </footer>
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
</body>