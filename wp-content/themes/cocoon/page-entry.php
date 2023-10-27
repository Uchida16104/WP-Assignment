<?php 
if ( !defined( 'ABSPATH' ) ) exit;

if (!is_amp()) {
   get_header();
 } else {
   get_template_part('tmp/amp-header');
 }
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('article') ?> itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting">
<form action="<?php the_permalink(); ?>" method="post">
 
<?php wp_nonce_field( 'entry', 'entry_nonce' ) ?>
 
<?php if ( ! empty( $error['global'] ) ): ?><p><?php echo $error['global']; ?></p><?php endif; ?>
 
<dl>
	<dt>お名前</dt>
	<dd>
		<?php if ( ! empty( $error['nickname'] ) ): ?><p><?php echo $error['nickname']; ?></p><?php endif; ?>
		<input type="text" name="nickname" value="<?php echo $value['nickname']; ?>" />
	</dd>
	<dt>メールアドレス</dt>
	<dd>
		<?php if ( ! empty( $error['user_email'] ) ): ?><p><?php echo $error['user_email']; ?></p><?php endif; ?>
		<input type="email" name="user_email" value="<?php echo $value['user_email']; ?>" />
	</dd>
	<dt>パスワード (半角6文字以上)</dt>
	<dd>
		<?php if ( ! empty( $error['user_pass'] ) ): ?><p><?php echo $error['user_pass']; ?></p><?php endif; ?>
		<input type="password" name="user_pass" />
	</dd>
</dl>
 
<button type="submit">登録</button>
 
</form>

<?php get_footer(); ?>
</article>
