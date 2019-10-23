<section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">We are Results Driven
            </h2>
        </div>
      </div>
      <div class="row content-row text-center">
      <?php // The Query
                  $args = array('post_type' => 'results');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                  global $active_class; //global to make it available in other places
                  $active_class = 'active';
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();

                          get_template_part('partials/content','result');

                          $active_class = '';
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
        ?>


      </div>
    </div>
    <div class="section-image" style="background-size:cover;background-position-y:<?php the_field('section_image_position')?>%; background-image:url( <?php the_field('section_image')?>); height:<?php the_field('section_image_height')?>vh;"></div>
  </section>