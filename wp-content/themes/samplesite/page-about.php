<?php get_header(); ?>
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
                    <th>What's this?</th>
                    <td><?php the_field('what'); ?></td>
                </tr>
                <tr>
                    <th>Purpose</th>
                    <td><?php the_field('purpose'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Terms</th>
                    <td><?php the_field('terms'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>