<?php
get_header(); ?>

Bonjour tout le monde : <?php wp_title(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><? the_title() ?></h1>
    <p>
      <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:100%; height:auto" ;>
    </p>
    <?php the_content('post_thumbnail') ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>