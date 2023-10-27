<?php get_header(); ?>
<main>
	<section class="sub_mv">
		<picture>
			<source media="(max-width: 980px)"
				srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp.png, <?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp@2x.png 2x">
			<img src="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage@2x.png 2x">
		</picture>
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<section class="information">
		<div class="container">
			<?php 
			$cat = get_the_category();
			$cat = $cat[0];
			$cat_slug = $cat -> slug;
			if($cat_slug != 'works'): ?>
			<h2><?php the_title(); ?></h2>
			<div class="date">／<?php the_time('Y/m/d'); ?></div>
			<?php endif; ?>
			<p><?php the_content(); ?></p>
		</div>
	</section>
</main>
<?php get_footer(); ?>