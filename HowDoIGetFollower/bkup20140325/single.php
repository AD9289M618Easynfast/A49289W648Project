<?php get_header(); ?>

<div class="singlepost">

<div class="postsimple">

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<span>Date: <?php the_time('d.m.y'); ?> / Author: <?php the_author(); ?></span>

<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>