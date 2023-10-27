<?php get_header(); ?>
<main>
	<section class="sub_mv">
		<div class="container">
			<h1>お知らせ</h1>
		</div>
	</section>
	<section class="animation-info">
		<div class="content">
			<img src="<?php echo get_template_directory_uri(); ?>/img/animation/img_blue.png" class="box box01">
			<img src="<?php echo get_template_directory_uri(); ?>/img/animation/img_red.png" class="box box02">
			<img src="<?php echo get_template_directory_uri(); ?>/img/animation/img_yellow.png" class="box box03">
			<img src="<?php echo get_template_directory_uri(); ?>/img/animation/img_green.png" class="box box04">
		</div>
	</section>
	<section class="information">
		<div class="container">
			<?php query_posts(array('posts_per_page' => 10, 'category_name' => 'information', 'paged' => get_query_var('paged'))); ?>
			<?php $i = 1 ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
				<ul>
					<li><a href="<?php the_permalink(); ?>"><span class="date"><?php the_time('Y-m-d'); ?>
					<span class="new"><?php  if(strtotime(get_the_time('Y-m-d')) >= (time() - 60 * 60 * 24 * 7)):echo "New!";else:echo "&emsp;&emsp;&emsp;";endif;?></span></span><?php the_title(); ?></a>
					</li>
				</ul>
				<?php $i++ ?>
			<?php endwhile; endif; ?>
			<?php wp_pagenavi(); ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>