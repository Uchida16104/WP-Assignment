<?php //エントリーカード
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;
$article_id_attr = null;
if (is_front_page_type_index()) {
  $article_id_attr = ' id="post-'.get_the_ID().'"';
}
?>

<a href="<?php echo esc_url(get_the_permalink()); ?>" class="entry-card-wrap a-wrap border-element cf" title="<?php echo esc_attr(get_the_title()); ?>">
  <article<?php echo $article_id_attr; ?> <?php post_class( array('post-'.get_the_ID(), 'entry-card','e-card', 'cf') ); ?>>

    <div class="entry-card-content card-content e-card-content e-card_list">
      <h2 class="entry-card-title card-title e-card-title" itemprop="headline"><?php the_title() ?></h2>
      <?php //スニペットの表示
      if (is_entry_card_snippet_visible()): ?>
      <div class="entry-card-snippet card-snippet e-card-snippet">
        <?php echo get_the_snippet( get_the_content(''), get_entry_card_excerpt_max_length() ); //カスタマイズで指定した文字の長さだけ本文抜粋?>
      </div>
      <?php endif ?>
      <?php //PVエリアの表示
      if (is_admin_index_pv_visible() && is_user_administrator() || apply_filters('public_page_entry_card_pv_visible', false)) {
        get_template_part('tmp/admin-pv');
      } ?>
    </div><!-- /.entry-card-content -->
  </article>
</a>
