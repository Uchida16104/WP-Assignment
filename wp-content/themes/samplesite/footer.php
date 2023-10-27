<footer>
        <ul>
            <li class="home"><a href="<?php echo home_url(); ?>/">TOP</a></li>
            <li><a href="<?php echo home_url(); ?>/service">SERVICE</a></li>
            <li><a href="<?php echo home_url(); ?>/company">COMPANY</a></li>
            <li><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
            <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
        </ul>
        <div id="footer">
            <div class="copyright">Copyright &copy; <?php the_time('Y'); ?> Pokhara All Rights Reserved.</div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <?php get_footer(); ?>