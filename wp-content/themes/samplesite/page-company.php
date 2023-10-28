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
    /* Template Name: 会社概要 */
    ?>
    <div id="cont_first" class="container">
        <div id="contents" class="single">
            <div class="main">
                <div class="">
                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
                <table>
                    <tr>
                        <th>会社名</th>
                        <td>
                            <?php the_field('add_company'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>本社</th>
                        <td>〒
                            <?php the_field('add_postnumber'); ?>
                            <br>
                            <?php the_field('add_locate'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>
                            <?php the_field('add_date'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>
                            <?php the_field('add_money'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td>
                            <?php the_field('add_member'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>
                            <?php the_field('add_tel'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>
                            <?php the_field('add_name'); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>