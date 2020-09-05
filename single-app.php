<?php get_header(); ?>

<section class="portfolio__single-item-page">
  <div class="container">
    <div class="row">
      <?php
        while( have_posts() ) {
          the_post(); ?>

          <div class="col-md-6">
            <img src="<?php echo get_field('mobile_app_screenshot')['url']; ?>" alt="">
          </div>
          <div class="col-md-6">
            <h1><?php the_title(); ?></h1>
            <h3>نبذة عن العمل:</h3>
            <p><?php the_field('mobile_app_description'); ?></p>
            <a href="<?php the_field('app_link'); ?>" class="btn btn-danger">رابط العمل</a>
          </div>

      <?php
        }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>