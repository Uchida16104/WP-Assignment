<?php get_header(); ?>
<main>
		<section class="sub_mv">
			<picture>
				<source media="(max-width: 980px)"
					srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp.png, <?php echo get_template_directory_uri(); ?>/img/common/bg_subpage_sp@2x.png 2x">
				<img src="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage.png" srcset="<?php echo get_template_directory_uri(); ?>/img/common/bg_subpage@2x.png 2x">
			</picture>
			<div class="container">
				<h1>施工事例</h1>
			</div>
		</section>
		<section class="p-content">
			<div class="container">
				<h2>お客様の施工事例をご紹介</h2>
				<p class="introduction">ご家族の夢やこだわりが詰まった小林工務店の施工事例をご紹介します。<br>理想の住まいづくりの参考にお役立てください。</p>
				<ul>
					<?php query_posts('category_name=works'); ?>
					<?php $i = 1 ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
						<li><a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('thumbside'); ?>
							</a>
								<div class="cat">
									<?php if($i == 1): echo '<span class="new">New!</span>'; endif;?>
									<?php the_tags('',' '); ?>
								</div>
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
								<!--<div class="desc">
									<?php get_index('div','date');?>
								</div>-->
						</li>
					<?php $i++ ?>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>