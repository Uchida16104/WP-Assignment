<?php get_header(); ?>	

    <div id="cont_first" class="container">
        <div class="">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
        <div id="contents">
            <div id="cont_left">
            <div class="information">
                    <h2>BLOG</h2>
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
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>