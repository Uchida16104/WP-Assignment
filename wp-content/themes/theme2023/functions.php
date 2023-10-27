<?php
//カスタムメニュー
register_nav_menus( 
array(
'place_global' => 'グローバル',
'place_utility' => 'ユーティリティ',
'place_footer' => 'フッター',
)
);

//指定したタグとクラスに該当するタグの中身を出力する関数
//classがない場合は$classに0と入力
function get_index($tag,$class){
    global $post;
    if($class == '0'){
        preg_match_all('/<'.$tag.'>(.|\n)+<\/'.$tag.'>/',$post->post_content,$matches);
    }else{
        preg_match_all('/<'.$tag.'(\s)*class=\"'.$class.'\">(.|\n)+<\/'.$tag.'>/',$post->post_content,$matches);
    }
    
    $matches_count = count($matches[0]);
    if(empty($matches)){
        //タグがない場合の出力
        echo '<span>Sorry no index</span>';
    }else{
        //タグが存在する場合にタグの中身を出力
        for ($i = 0; $i < $matches_count; $i++){
            $text = $matches[0][$i];
            if($class == '0'){
                $text = preg_replace('/<'.$tag.'>/','',$text);
                $text = preg_replace('/<\/'.$tag.'>(.|\n)+/','',$text);
            }else{
                $text = preg_replace('/<'.$tag.'\s*class=\"'.$class.'\">/','',$text);
                $text = preg_replace('/<\/'.$tag.'>(.|\n)+/','',$text);
            }
            echo  $text;
        }
    }     
}
//サムネイル表示
add_theme_support('post-thumbnails');


//新着情報ページにて、ページネーションを正しく表示するための処理
//カテゴリースラッグが間違って認識されてしまう事象を回避する
//参考：https://feel-log.net/wordpress/category-link-custom/
function category_link_custom( $query = array()) {
	// 先に子カテゴリーの404を回避
    if (isset($query['category_name']) && strpos($query['category_name'], '/') === false && isset($query['name'])) {
		$parent_category = get_category_by_slug($query['category_name']);
		$child_categories = get_categories('child_of='.$parent_category->term_id);	
		foreach ($child_categories as $child_category) {
			if ($query['name'] === $child_category->category_nicename) {
				$query['category_name'] = 'category/' . $query['category_name'].'/'.$query['name'];
				unset($query['name']);
			}
		}
	}
 
	// カテゴリーのページ送りを修正して404を回避
	if(isset($query['name']) && $query['name'] === 'page' && isset($query['page'])) {
		$paged = trim($query['page'], '/');
		if(is_numeric($paged)) {
			unset($query['name']);
			unset($query['page']);
            $paged = get_query_var('paged');//) ? absint(get_query_var('paged')) : 1;
			$query['paged'] = (int) $paged;
		}
	}
	return $query;
}
add_filter('request', 'category_link_custom');


/* rewite_rules_array
 * リライトルールの書き替え
 * 参考：https://www.rectus.co.jp/archives/9326
 */
function my_category_rewrite_rules_array($rules) {
    // 順番の入れ替え
    $exp = '(.+?)/page/?([0-9]{1,})/?$';
    $add_rules[$exp] = $rules[$exp];
    unset($rules[$exp]);
    return $add_rules + $rules;
  }

function get_the_latest_ID() {
    global $wpdb;
    $row = $wpdb->get_row("SELECT ID FROM $wpdb->posts WHERE post_type = 'post' ORDER BY post_date DESC");
    return !empty( $row ) ? $row->ID : '0';
}

function the_latest_ID() {
    echo get_the_latest_ID();
}
  add_action('rewrite_rules_array', 'my_category_rewrite_rules_array', 10, 1);

?>