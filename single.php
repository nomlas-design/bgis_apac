<?php
/*
Template Name: Single Post
Template Post Type: post
*/

// Get the ID of the current post
$post_id = get_the_ID();

// Get the URL of the featured image
$image_url = get_the_post_thumbnail_url($post_id);

// Get the excerpt of the current post
if (has_excerpt()) {
  $excerpt = get_the_excerpt();
} else {
  $excerpt = '';
}
?>

<?php get_header();
?>

<div class="wrapper wrapper--hero wrapper--media">
  <div class="container container--hero">
    <div class="hero__content hero__content--media">
      <h1 class="headline headline--large">
        <?php the_title(); ?>
      </h1>
      <div class="media media--hero media--accent">
        <img src="<?php echo $image_url ?>" class="media__img" />
      </div>
    </div>
  </div>
</div>

<section class="section section--media">
  <div class="wrapper">
    <div class="container container--33 container--post">
      <div class="post__excerpt">
        <h2 class="headline headline--small"><?php echo $excerpt ?></h2>
      </div>
      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </div>
</section>

<?php

get_footer();
