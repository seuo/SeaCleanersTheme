
<?php get_header()?>
 
    <?php get_template_part('hero')?>
    <?php get_template_part('results')?>
    
    <?php // The Query
                  $args = array('post_type' => 'section-image');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                  global $active_class; //global to make it available in other places
                  $active_class = 'active';
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();

                          get_template_part('image-section-one');

                          $active_class = '';
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
        ?>
    <?php get_template_part('helpus')?>
    <?php get_template_part('aboutus')?>
<?php get_footer()?>



