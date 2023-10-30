<?php
register_nav_menus( 
array(
'place_global' => 'グローバル',
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
);

?>
<?php 
add_theme_support('post-thumbnails');
add_image_size('thumbside', 85, 85, true);
?>

<?php
add_post_type_support('page', 'excerpt');
remove_filter('term_description','wpautop');
?>