
<!--Main Slider-->
<div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
    <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
        <ul>
        <?php // The Query
                  $args = array('post_type' => 'slide');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                  global $active_class; //global to make it available in other places
                  $active_class = 'active';
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();

                          get_template_part('partials/content','slide');

                          $active_class = '';
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
                ?>
 
        </ul>
    </div>
</div>
<!--Main Slider ends -->


