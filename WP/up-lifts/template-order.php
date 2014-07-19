<?php
/* Template Name: Order */
get_header('content');
?>
<div>
    <?php while (have_posts()) : the_post(); ?>
        <div class="internal-widget">
            <?php dynamic_sidebar('internal-widget') ?>
        </div>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop.   ?>
</div>

<?php
get_footer('content');
