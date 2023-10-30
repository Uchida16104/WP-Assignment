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
    <div class="container">
        <div id="contents">
        <div class="">
            <?php if(function_exists('bcn_display')) 
            {
                bcn_display();
                }?>
        </div>
            <div class="top-nav">
                <div class="top-navColumn top-navColumn_left">
                    <h2>SERVICE</h2>
                    <div class="top-navPhoto"><a href="<?php echo home_url(); ?>/service"><img src="<?php echo get_template_directory_uri(); ?>/images/photo02.jpg" alt="" width="460" /></a></div>
                    <p>弊社のサービスをご紹介します。</p>
                    <p class="top-navDetail"><a href="<?php echo home_url(); ?>/service">MORE</a></p>
                </div>
                <div class="top-navColumn top-navColumn_right">
                    <h2>COMPANY</h2>
                    <div class="top-navPhoto"><a href="<?php echo home_url(); ?>/company"><img src="<?php echo get_template_directory_uri(); ?>/images/photo03.jpg" alt=""  width="460" /></a></div>
                    <p>会社情報をご紹介します。</p>
                    <p class="top-navDetail"><a href="<?php echo home_url(); ?>/company">MORE</a></p>
                </div>
            </div>
            <div id="cont_left">
            　　<div class="information">
                    <h2>INFORMATION</h2>
                    <dl class="blog">
                    <?php $infoPosts = get_posts('numberposts=3'); foreach($infoPosts as $post): ?> 
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?> </span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました</dd>
                    <?php endforeach; ?>
                    </dl>
                </div>
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
                        <div class="b_right"><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5>
                        <br><br>
                        <?php
                        if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
                            $content = mb_substr( wp_strip_all_tags( $post->post_content ), 0, 30, 'UTF-8' );
                            echo $content . '…';
                        } else {
                            echo wp_strip_all_tags( $post->post_content, $remove_breaks = true);
                        }
                        ?></a></div></dd>
                        <?php endwhile; endif; ?>
                        <?php wp_pagenavi(); ?>
                    </dl>
                </div>
            </div>
            <?php get_sidebar(); ?>      
        </div>
    </div>
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
<?php get_footer(); ?>