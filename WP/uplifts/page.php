<?php
get_header('content');
get_sidebar('content');
?>
<div>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop.   ?>
</div>

<?php
get_footer('content');
