<?php get_header(); ?>

<section id="portfolio-items" class="text-center">
  <div class="container">
    <h1>أعمالنا في تطوير المواقع</h1>
    <div class="row">
    <div class="row">
      <?php
					$args = array(
						'post_type' => 'app',
						'posts_per_page' => -1
					);

					$app = new WP_Query( $args );

					while ($app->have_posts()) {
						$app->the_post(); ?>

      <div class="col-lg-3">
        <img src="<?php echo get_field('mobile_app_screenshot')['url']; ?>" alt="">
      </div>
      <div class="col-lg-3">
        <h3 class="text-center"><?php the_title(); ?></h3>
        <p><?php the_field('mobile_app_description'); ?></p>
      </div>

      <?php }
					wp_reset_postdata();
				?>
    </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>