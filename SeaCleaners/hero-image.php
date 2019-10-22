<section class="single-items center-block center-block item-one parallaxie full-screen" style="height: 100vh; width: 100vw; background-image: url(<?php the_field('image')?>); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 0px;" id="home">
   <div class="container">
      <div class="row">
      <?php // The Query
                  $args = array('post_type' => 'hero');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                  global $active_class; //global to make it available in other places
                  $active_class = 'active';
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();

                          get_template_part('partials/content','hero');

                          $active_class = '';
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
                ?>


      </div>
   </div>
</section>

