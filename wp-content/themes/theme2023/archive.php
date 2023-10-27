<?php 
if ( is_category('information') ) {
	include(TEMPLATEPATH . '/category-information.php');
  } else if ( is_category('works') ) {
	include(TEMPLATEPATH . '/category-works.php');
  }else{
	include(TEMPLATEPATH . '/category-information.php');
  }
?>