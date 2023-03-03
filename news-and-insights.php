<?php
/*
Template Name: News & Insights
*/

?>

<?php get_header();
?>

<div class="wrapper wrapper--hero wrapper--arrow">
  <div class="container container--hero container--hero--centered">
    <div class="hero__content">
      <h1 class="headline headline--large">
        <?php the_title(); ?>
      </h1>
      <p>Sharing thought leadership to address the challenges of today and tomorrow.</p>
    </div>
  </div>
  <div class="hero__arrow">
  </div>
</div>
<section class="section section--top">
  <div class="wrapper">
    <div class="container container--50 container--subscribe">
      <div class="subscribe__content">
        <h2 class="headline headline--xsmall">Keep up-to-date with the latest industry trends</h2>
        <p>Subscribe to our regular newsletter</p>
      </div>
      <a href='#' class="btn btn--primary">
        <span class='btn__label'>Sign Up Now</span>
        <span class='btn__line'></span>
        <span class='btn__arrow'></span>
      </a>
    </div>
  </div>
</section>
<section class="section section--padding">
  <div class="wrapper">
    <div class="container container--posts">
      <div class="posts__sidebar">
        Filter news & insights by topic
        <form class="posts__filter_form">
          <label for="awards">
            <input type="checkbox" id="awards" name="awards" value="awards">
            <span>Awards</span>
          </label>
          <label for="blog">
            <input type="checkbox" id="blog" name="blog" value="blog">
            <span>Blog</span>
          </label>
          <label for="news">
            <input type="checkbox" id="news" name="news" value="news">
            <span>News</span>
          </label>
          <label for="presentation">
            <input type="checkbox" id="presentation" name="presentation" value="presentation">
            <span>Presentation</span>
          </label>
          <label for="press-release">
            <input type="checkbox" id="press-release" name="press-release" value="press-release">
            <span>Press Release</span>
          </label>
        </form>
      </div>
      <div class="posts">
      </div>
    </div>
</section>


<?php get_footer();
?>