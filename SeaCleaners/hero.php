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

