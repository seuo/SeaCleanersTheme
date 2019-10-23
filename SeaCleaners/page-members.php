
<?php get_header()?>
 <!-- Team -->
 <section class="bg-light page-section" id="team">
    <div class="container content-container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php the_title()?></h2>
          <h3 class="section-subheading text-muted"><?php the_content()?></h3>
        </div>
      </div>
      <div class="row content-row">
      <?php // The Query
                  $args = array('post_type' => 'Members');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                 
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();
                          get_template_part('partials/content','member');
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
                ?>
       
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer()?>