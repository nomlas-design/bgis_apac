<?php get_header();
while (have_posts()) {
  the_post();
} ?>

<div class="wrapper wrapper--page">
  <div class="container container--page">
    <div class="page__content">
      <h1 class="page__title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>