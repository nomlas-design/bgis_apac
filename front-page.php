<?php
$post_id = get_the_ID();
$image_url = get_the_post_thumbnail_url($post_id, 'full');
?>

<?php get_header(); ?>

<div class="wrapper wrapper--hero wrapper--gradient" style="background-image: url('<?php echo $image_url; ?>');">
  <div class="container container--hero container--hero--left">
    <div class="hero__content hero__content--left">
      <h1 class="headline headline--xlarge">
        Leading<br />Through<br />Innovation
      </h1>
      <p>
        BGIS is a global leader in integrated facility management services. Offering a full range of facility and real estate management services, BGIS partners with clients globally to deliver innovative solutions.
      </p>
    </div>
  </div>
</div>
<section class="section">
  <div class=" wrapper">
    <div class="container container--50">
      <div class="media media--accent">
        <img src="<?php echo get_theme_file_uri('/images/pages/home/Enabling.jpg') ?>" alt="Worker standing next to machinery" class="media__img" />
      </div>
      <div class="content content--padding">
        <div class="strapline">About Us</div>
        <h2 class="headline headline--large">
          Enabling What's Next
        </h2>
        <p class="p__content">
          At BGIS, we believe there is always a better way. We seek out opportunities, encourage change and cultivate success. Our people are passionate individuals who solve problems through diverse ways of thinking and innovation to create places that work now and for the future.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section section--blue">
</section>
<section class="section">
  <div class="wrapper">
    <div class="container container--50">
      <div class="card">
        <div class="media media--card">
          <img src="<?php echo get_theme_file_uri('/images/pages/home/Sectors.jpg') ?>" alt="Worker with BGIS helmet fixing pipes" class="media__img" />
        </div>
        <div class="card__content">
          <h2 class="headline headline--medium">
            Sectors We Serve
          </h2>
          <p>
            With a diverse client portfolio, BGIS offers innovative solutions across many industries.
          </p>
          <a href='#' class="btn btn--primary">
            <span class='btn__label'>View Sectors</span>
            <span class='btn__line'></span>
            <span class='btn__arrow'></span>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="media media--card">
          <img src="<?php echo get_theme_file_uri('/images/pages/home/Careers.jpg') ?>" alt="Worker with BGIS helmet fixing pipes" class="media__img" />
        </div>
        <div class="card__content">
          <h2 class="headline headline--medium">
            Careers at BGIS
          </h2>
          <p>
            Be a part of our growing team, helping inspire and shape our world for a brighter, more sustainable future.
          </p>
          <a href='#' class="btn btn--primary">
            <span class='btn__label'>Careers</span>
            <span class='btn__line'></span>
            <span class='btn__arrow'></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer(); ?>