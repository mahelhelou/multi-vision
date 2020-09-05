<?php get_header(); ?>

<section id="portfolio-items" class="text-center">
  <div class="container">
    <h1 class="portfolio__page-title">أعمالنا في تنظيم المعارض والمؤتمرات</h1>
    <div class="row">
      <?php
					$args = array(
						'post_type'       => 'conference',
						'posts_per_page'  => -1
					);

					$conference = new WP_Query( $args );

					while ( $conference->have_posts() ) {
						$conference->the_post(); ?>

            <div class="col-lg-3">
              <div class="portfolio-item">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_field('conference_screenshot')['url']; ?>" alt="">
                </a>
                <h3><?php the_title(); ?></h3>
              </div>
            </div>

      <?php }
				wp_reset_postdata();
			?>
    </div>
  </div>
</section>

<?php get_footer(); ?>