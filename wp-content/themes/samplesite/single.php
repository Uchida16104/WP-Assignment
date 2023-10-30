<head>
<meta charset="UTF-8">
<?php wp_head(); ?>
</head>
<body>
<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2023-10-15') ): ?>
<style>
    body{
        font-weight:bold;
        width: 100%;
        height: 100vh;
        background: linear-gradient(90deg, #fff0f0,#f0fff0,#f0f0ff);
        background-size: 200% 200%;
        animation: bg-color 60s ease infinite;
    }
    @keyframes bg-color {
        0%{
            background: linear-gradient(90deg, #fff0f0,#f0fff0,#f0f0ff);
            background-position:0% 50%;
        }
        50%{
            background: linear-gradient(90deg, #f0fff0,#f0f0ff,#fff0f0);
            background-position:100% 50%;
        }
        100%{
            background: linear-gradient(90deg, #f0f0ff,#fff0f0,#f0fff0);
            background-position:0% 50%;
        }
    }
</style>
<?php else : ?>
<style>
    body{
        background: linear-gradient(90deg, #ffefef, transparent);
    }
</style>
<?php endif; ?>
<?php get_header(); ?>
<div id="slide">
    <?php if( strtotime(get_the_date('Y-m-d')) < strtotime('2023-10-01') ): ?>
        <ul class="slide-inner">
            <li></li>
            <li></li>
            <li></li>
        </ul>
         <div class="s-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_prev.png" alt="前へ"></div>
         <div class="s-next"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_next.png" alt="次へ"></div>
         <div class="cont-nav"></div>
    <?php else : ?>
        <script src="https://unpkg.com/hydra-synth"></script>
        <canvas class="slide-inner" id="myCanvas"></canvas>
        <style>
            #myCanvas {
                height: 390px;
                width: 100%;
                padding: 0;
                margin: 0;
                background-size: cover;
            }
        </style>
        <script>
        var hydra = new Hydra({
            canvas: document.getElementById("myCanvas"), 
            detectAudio: false,
            enableStreamCapture: false,
        })
        function keyControl() {
            value1 = 5;
            value2 = 99 / 100;
            value3 = 5;
            value4 = 1 / 20
            document.addEventListener('keydown', () => {
                value1 = 3;
                value2 = 9 / 10;
                value3 = 0;
                value4 = 1 / 100;
            });
            document.addEventListener('keyup', () => {
                value1 = 5;
                value2 = 99 / 100;
                value3 = 5;
                value4 = 1 / 20;
            });
        }
        keyControl();
        solid().add(gradient("(st.x-st.y)/time").colorama(() => value4).contrast(() => value3).mult(src(o0).modulateHue(src(o0).scale(1.01), 2).layer(shape(4, 0, 1).colorama(() => value1).mask(voronoi()))).rotate([0, Math.PI].ease('easeInOutCubic').fit(Math.sin(time / 10), Math.tan(time / 20)).smooth().offset(() => Math.cos(time)).ease(() => Math.tan(time / 30)).fast(time)), [1, 0].smooth()).add(noise(() => value1 * 10).posterize(2, 2).pixelate(50, 50).saturate(() => value3).mult(osc(1, 2, 300)), [0, 1].smooth()).blend(o0, () => value2).out(o0);
        </script>
    <?php endif; ?>
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
if ( $terms ) {
	foreach ( $terms as $term ) {
		$term_link = get_term_link( $term );
		echo ','.'<a href="'.esc_url( $term_link ).'">'.$term->name.'</a>';
	}
}
?>
<?php get_footer(); ?>
</body>