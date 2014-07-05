<?php get_header(); ?>

<div class="archive">

<div class="posts">

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post">

<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
<span>Date: <?php the_time('d.m.y'); ?> / Author: <?php the_author(); ?></span>

<?php the_content(); ?>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_pagenavi(); ?>

</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>