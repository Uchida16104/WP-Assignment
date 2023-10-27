<?php get_header(); ?>

<section class="mv">
	<img src="<?php echo get_template_directory_uri(); ?>/img/mv-bg.png" class="animation-back">
	<div class="loading">
		<div id="loading-box">
			<img id="loading-img" src="<?php echo get_template_directory_uri(); ?>/img/animation/ハピテライオン_扉をたたく.png">
			<div id="loading-text">
				<p class="loading-char">L</p>
				<p class="loading-char">o</p>
				<p class="loading-char">a</p>
				<p class="loading-char">d</p>
				<p class="loading-char">i</p>
				<p class="loading-char">n</p>
				<p class="loading-char">g</p>
				<p class="loading-char">.</p>
				<p class="loading-char">.</p>
				<p class="loading-char">.</p>
			</div>
		</div>
	</div>
	<div class="animation fade-in">
		<img src="<?php echo get_template_directory_uri(); ?>/img/bunkasai_logo.png" class="mv-blackboard-logo fade-in">
		<div class="ico-info-link ico-info-link_pc lion fade-in-icon_pc">
			<div class="balloon-bottom happy-terrace-lion about">
				<h1>でこぼこ文化祭とは</h1><h2>「ハピテライオン」をクリック</h2>
			</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/lion.png" class="mv-lion mv-lion_pc lion fade-in-to-left">
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/lion.png" class="mv-lion mv-lion_sp lion fade-in-to-left">
		<div class="ico-art-link ico-art-link_pc fade-in-icon-art_pc">
			<div class="balloon-bottom art-contest">
				<h1>凸凹が活きる社会を創る。</h1><br><h2>アートコンテスト</h2>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/ico-art.png" class="ico-art">
		</div>
		<a href="#modal_a" class="btn">
			<div class="ico-info-link ico-info-link_pc decoboco-diary fade-in-icon_pc">
				<div class="balloon-bottom diary">
					<h1>学級日誌</h1><br><h2>お知らせ</h2>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico-info.png" class="ico-info decoboco-diary">
			</div>
		</a>
		<div class="balloon-background balloon-background_pc balloonDisappear">
			<div class="balloon balloon_pc">
				<img class="ico-close" src="<?php echo get_template_directory_uri(); ?>/img/919_x_h.png">
				<h2 class="balloon-h">凸凹が活きる社会を創る。アートコンテスト</h2>
				<p class="balloon-text">
					説明が入ります。説明が入ります。説明が入ります。<br>
					説明が入ります。説明が入ります。説明が入ります。<br>
					説明が入ります。説明が入ります。説明が入ります。
				</p>
				<button onclick="open('http://decoboco-art.decoboco-base.com/', 'decoboco-art', 'noopener noreferrer')">特設サイトをみる</button>
			</div>
		</div>

		<?php /*
		<!-- <div class="balloon-background2 balloon-background_pc2 balloonDisappear2">
			<div class="balloon2 balloon_pc2">
				<img class="ico-close2" src="<?php echo get_template_directory_uri(); ?>/img/919_x_h.png">
				<h2 class="balloon-h">学級日誌</h2>
				<p class="balloon-text">
					更新情報・ニュースはこちら
				</p>
				<button onclick="open('<?php the_permalink(); ?>', 'decoboco-art', 'noopener noreferrer')">新着情報をみる</button>
			</div>
		</div> -->
		*/ ?>

		<div class="balloon-background3 balloon-background_pc3 balloonDisappear3">
			<div class="balloon3 balloon_pc3">
				<img class="ico-close3" src="<?php echo get_template_directory_uri(); ?>/img/919_x_h.png">
				<h2 class="balloon-h">でこぼこ文化祭とは</h2>
				<p class="balloon-text">
					更新情報・ニュースはこちら
				</p>
				<button onclick="open('<?php the_permalink(); ?>', 'decoboco-art', 'noopener noreferrer')">新着情報をみる</button>
			</div>
		</div>
	</div>

	<!-- <div class="catch">
		<div class="container">つなぐデザイン<br>笑顔あふれる住まいづくり</div>
	</div> -->

	<div class="outer-container">
		<div class="container container-information"></div>
	</div>
</section>
<section class="sp_art">
	<div class="ico-art-link ico-art-link_sp fade-in-icon-art_pc">
		<img src="<?php echo get_template_directory_uri(); ?>/img/ico-art.png" class="ico-art">
	</div>
	<div class="ico-art-title">
		<p>凸凹が活きる社会を創る。<br>アートコンテスト</p>
	</div>
	<a href="#modal_a" class="btn">
		<div class="ico-info-link ico-info-link_sp fade-in-icon_pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/ico-info.png" class="ico-info">
		</div>
	</a>
	<div class="balloon-background balloon-background_sp balloonDisappear">
		<div class=" balloon balloon_sp">
			<img class="ico-close" src="<?php echo get_template_directory_uri(); ?>/img/919_x_h.png">
			<h2 class="balloon-h">凸凹が活きる社会を創る。アートコンテスト</h2>
			<p class="balloon-text">
				説明が入ります。説明が入ります。説明が入ります。<br>
				説明が入ります。説明が入ります。説明が入ります。<br>
				説明が入ります。説明が入ります。説明が入ります。
			</p>
			<button onclick="open('http://decoboco-art.decoboco-base.com/', 'decoboco-art', 'noopener noreferrer')">特設サイトをみる</button>
		</div>
	</div>

	<?php /*  
	<!-- <div class="balloon-background2 balloon-background_sp2 balloonDisappear2">
			<div class="balloon2 balloon_sp2">
				<img class="ico-close2" src="<?php echo get_template_directory_uri(); ?>/img/919_x_h.png">
				<h2 class="balloon-h">学級日誌</h2>
				<p class="balloon-text">
					更新情報・ニュースはこちら
				</p>
				<button onclick="open('<?php the_permalink(); ?>', 'decoboco-art', 'noopener noreferrer')">新着情報をみる</button>
			</div>
	</div> -->
	*/ ?>

	<div class="balloon-background3 balloon-background_sp3 balloonDisappear3">
		<div class="balloon3 balloon_sp3">
			<img class="ico-close3" src="<?php echo get_template_directory_uri(); ?>/img/919_x_h.png">
			<h2 class="balloon-h">学級日誌</h2>
			<p class="balloon-text">
				更新情報・ニュースはこちら
			</p>
			<button onclick="open('<?php the_permalink(); ?>', 'decoboco-art', 'noopener noreferrer')">新着情報をみる</button>
		</div>
	</div>
</section>
	
<?php /*
<!-- <section class="information">
	<h2 class="h2_square">
		<div class="container">新着情報</div>
	</h2>

</section>
<section class="design">
	<h2 class="center">
		<div class="container">つなぐデザイン</div>
	</h2>
	<div class="container">
		<ul>
			<li>
				<div class="design-text">
					<h3>家をつなぐ場所</h3>
					<p>住まいは、家族の人生と共にあり、家族を「つなぐ」場所です。<br>
						それぞれの家族にそれぞれの暮らし方があり、世代ごとにも違った暮らし方があります。<br>
						年月として変化する家族の暮らし方を見据えずっと心地いいと感じることのできる、家族をつなぐ家づくりを一緒に考えていけるパートナーになれたら私たちも幸せです。</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top/design01.png" srcset="<?php echo get_template_directory_uri(); ?>/img/top/design01@2x.png 2x">
			</li>
			<li>
				<div class="design-text">
					<h3>生活をデザインする</h3>
					<p>私たちの家づくりは、家族の自分たちらしさをひとつひとつつなげていくその答えを形にしていくことを大切にしています。<br>
						自分たちらしい暮らし、自分たちが本当に好きなものを一緒に探しながら、自分たちらしさをつなぐことのできるよう全力でサポート致します。</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top/design02.png" srcset="<?php echo get_template_directory_uri(); ?>/img/top/design02@2x.png 2x">
			</li>
		</ul>
		<a href="<?php echo home_url(); ?>/business/" class="design_more">会社紹介はこちら</a>
	</div>
</section>
<section class="flow">
	<h2 class="center">
		<div class="container">家づくりの流れ</div>
	</h2>
	<div class="container">
		<ul>
			<li>
				<div class="step"><span>STEP</span>01</div>
				<p>お問合せ</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>02</div>
				<p>土地探し・土地調査</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>03</div>
				<p>ヒアリング</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>04</div>
				<p>設計・お見積り</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>05</div>
				<p>ご契約</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>06</div>
				<p>内・外装のお打合せ</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>07</div>
				<p>地盤調査・地鎮祭</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>08</div>
				<p>工事着手</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>09</div>
				<p>上棟</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>10</div>
				<p>中間検査</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>11</div>
				<p>完了検査</p>
			</li>
			<li>
				<div class="step"><span>STEP</span>12</div>
				<p>お引き渡し</p>
			</li>
		</ul>
		<a href="<?php //echo home_url(); ?>/flow/" class="more">家づくり</a>
	</div>
</section>
<section class="case">
	<h2 class="center">
		<div class="container">施工事例</div>
	</h2>
	<div class="container">
		<ul>
		<?php
		$infoPosts = get_posts('numberposts=4&category_name=works');
		foreach ($infoPosts as $post): ?> 
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('thumbside'); ?>
					<h3><?php the_title(); ?></h3>
				</a>
			</li>
		<?php 
		endforeach;
		?>
		</ul>
		<a href="<?php echo home_url(); ?>/works/" class="case_more">施工事例一覧はこちら</a>
	</div>
</section>
<section class="information info02">
	<h2 class="h2_square">
		<div class="container">お知らせ<span>information</span></div>
	</h2>
	<div class="container">
		<ul>
			一旦new表示の条件を最新一件に設定
			<?php 
			$i = 1;
			$infoPosts = get_posts('numberposts=1&category_name=information');
			foreach ($infoPosts as $post): ?> 
				<li>
					<a href="<?php the_permalink(); ?>">
						<span class="date">
							<?php the_time('Y-m-d'); ?>
							<span class="new">
								<?php 
								if ($i == 1){ 
									echo "New!";
								}
								else{
									echo "&emsp;&emsp;&emsp;";
								}
								?>
							</span>
						</span>
						<?php the_title(); ?>
					</a>
				</li>
				<?php 
				$i++;
			endforeach;
			?>
		</ul>
			
		<a href="<?php echo home_url(); ?>/information/" class="more">一覧を見る</a>
	</div>
</section> -->
*/ ?>

<div class="remodal" id="modal" data-remodal-id="modal_a">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="modal-flex">
		<?php $arrayID = array();
		query_posts('posts_per_page=-1&cat=3'); ?>
		<div class="modal-list-wrapper"><ul>
			<?php while (have_posts()) : the_post(); ?>
				<li>
					<div class="info-upper">
						<span class="tag tag_<?php 
							$cat = get_the_category();
							$cat = $cat[0];
							echo $cat->slug;
						?>">
							<?php $cat = get_the_category();
							$cat = $cat[0]; {
								echo $cat->cat_name;
							} ?>
						</span>
						<span class="date">
							<?php the_time('Y年m月d日'); ?>
						</span>
					</div>
					<a href="#id<?php the_ID(); ?>" class="info-title"><?php the_title(); ?></a>
					<?php
					array_push($arrayID, "#id" . get_the_ID()); ?>
				</li>
			<?php endwhile; ?>
		</ul></div>
		<!--<button onclick="open('?php the_permalink(); ?>', 'decoboco-art', 'noopener noreferrer')">新着情報をみる</button>-->
		<div class="text-contents">
			<?php query_posts('posts_per_page=-1&cat=3'); ?>
			<?php 
			while(have_posts()): 
				the_post(); 
			?>
				<div class="text-content" id="id<?php the_ID(); ?>">
					<div class="content-upper">
						<span class="tag tag_<?php 
							$cat = get_the_category();
							$cat = $cat[0];
							echo $cat->slug;
						?>">
							<?php 
							$cat = get_the_category();
							$cat = $cat[0];
							echo $cat->cat_name;
							?>
						</span>
						<span class="date"><?php the_time('Y年m月d日'); ?></span>
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="article"><?php the_content(); ?></div>
					<div class="sp-back-button">
						<button>一覧へ戻る</button>
					</div>

					<?php /*
					<!--<div class="pagination">
						<?php
						$lastPaged = count($arrayID);
						foreach ($arrayID as $key => $id) :
							if ($id == "#id" . get_the_ID()) {
								$paged = $key + 1;
								if ($paged - 1 >= 1) {
									$prevPaged = $paged - 1;
								} else {
									$prevPaged = null;
								}
								if ($paged + 1 <= $lastPaged) {
									$nextPaged = $paged + 1;
								} else {
									$nextPaged = null;
								}
								if (isset($prevPaged)) {
									echo "<a href='" . $arrayID[$prevPaged - 1] . "' class='paged-box'><</a>";
								}

								if ($paged != 1 && $paged != 2 && $paged != 3) {
									echo "<a href='" . $arrayID[0] . "' class='paged-box'>1</a>";
									echo "<span class='paged-box'>…</span>";
								}
								if (!isset($nextPaged)) {
									echo "<a href='" . $arrayID[$paged - 3] . "' class='paged-box'>" . strval($paged - 2) . "</a>";
								}
								if (isset($prevPaged)) {
									echo "<a href='" . $arrayID[$prevPaged - 1] . "' class='paged-box'>" . $prevPaged . "</a>";
								}
								echo "<a href='" . $arrayID[$key] . "' class='paged-box current'>" . $paged . "</a>";
								if (isset($nextPaged)) {
									echo "<a href='" . $arrayID[$nextPaged - 1] . "' class='paged-box'>" . $nextPaged . "</a>";
								}
								if (!isset($prevPaged)) {
									echo "<a href='" . $arrayID[$paged + 1] . "' class='paged-box'>" . strval($paged + 2) . "</a>";
								}
								if ($paged != $lastPaged && $paged != $lastPaged - 1 && $paged != $lastPaged - 2) {
									echo "<span class='paged-box'>…</span>";
									echo "<a href='" . $arrayID[$lastPaged - 1] . "' class='paged-box'>" . $lastPaged . "</a>";
								}
								if (isset($nextPaged)) {
									echo "<a href='" . $arrayID[$nextPaged - 1] . "' class='paged-box'>></a>";
								}
							}
						?>
						<?php endforeach; ?>
					</div>-->
					*/ ?>
				</div>
			<?php 
			endwhile; 
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>