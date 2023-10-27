<?php get_header(); ?>
<main>
	<?php if(have_posts()): while(have_posts()): the_post();?>
	<section class="sub_mv">
			<picture>
				<source media="(max-width: 980px)"
					srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp.png, <?php echo get_template_directory_uri(); ?>/img/common/sample.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp@2x.png 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/img/works/bg_subpage.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage@2x.png 2x">
			</picture>
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>
   		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>