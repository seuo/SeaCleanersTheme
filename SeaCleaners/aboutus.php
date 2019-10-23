<?php get_header()?>
<section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
        </div>
      </div>
      <div class="row">
      <?php // The Query
                  $args = array('post_type' => 'about');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                 
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();
                          get_template_part('partials/content','aboutus');
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
                ?>

      </div>
    </div>
  </section>
  <?php get_footer()?>