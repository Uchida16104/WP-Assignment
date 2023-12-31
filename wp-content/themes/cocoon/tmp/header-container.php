<?php //ヘッダーエリア
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<div id="header-container" class="header-container">
  <div id="header-container-in" class="header-container-in<?php echo get_additional_header_container_classes(); ?>">
    <header id="header" class="header<?php echo get_additional_header_classes(); ?> cf" itemscope itemtype="https://schema.org/WPHeader">

      <div id="header-in" class="header-in wrap cf" itemscope itemtype="https://schema.org/WebSite">

        <?php //キャッチフレーズがヘッダー上部のとき
        if (is_tagline_position_header_top()) {
           get_template_part('tmp/header-tagline');
        } ?>

        <?php //ロゴ前にコードを挿入するためのアクションフック
        do_action( 'wp_header_logo_before_open' ); ?>

        <!--<?php //ロゴタグの生成
        generate_the_site_logo_tag(); ?>-->
		  <h1 class="logo logo-header logo-image"><a href="https://portal.dc-itex.com/" class="site-name site-name-text-link" itemprop="url"><span class="site-name-text" itemprop="name about"><img class="site-logo-image header-site-logo-image" src="https://portal.dc-itex.com/wp-content/uploads/2022/02/logo.svg" alt="ITEX利用者ポータル"></span></a></h1>

        <?php //ロゴ後にコードを挿入するためのアクションフック
        do_action( 'wp_header_logo_after_open' ); ?>

        <?php //キャッチフレーズがヘッダー下部のとき
        if (is_tagline_position_header_bottom()) {
           get_template_part('tmp/header-tagline');
        } ?>

      </div>

    </header>

    <?php get_template_part('tmp/navi'); ?>
  </div><!-- /.header-container-in -->
</div><!-- /.header-container -->
