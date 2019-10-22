<section id="our-team" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-8 offset-md-2 col-sm-12 text-center">
            <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
               <h2 class="darkcolor bottom20">Our Vessels</h2>
               <p></p>
            </div>
         </div>
      </div>
      <div class="row">
      <?php // The Query
                  $args = array('post_type' => 'boat');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                 
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();
                          get_template_part('partials/content','boat');
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
                ?>
      </div>
   </div>
</section>



 
 
