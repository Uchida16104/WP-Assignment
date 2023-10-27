<head>
<meta charset="UTF-8">
<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<div id="slide">
        <ul class="slide-inner">
            <li></li>
            <li></li>
            <li></li>
        </ul>
         <div class="s-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_prev.png" alt="前へ"></div>
         <div class="s-next"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_next.png" alt="次へ"></div>
         <div class="cont-nav"></div>
    </div>
<?php
/* Template Name: About */
?>
    <div class="">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
            }?>
    </div>
<table>
    <tr>
    	<th>What's this?</th>
        <td><?php the_field('what');?></td>
    </tr>
    <tr>
        <th>Purpose</th>
        <td><?php the_field('purpose');?>
        </td>
    </tr>
    <tr>
        <th>Terms</th>
        <td><?php the_field('terms');?></td>
    </tr>
</table>
<?php get_footer(); ?>
</body>