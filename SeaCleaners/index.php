
<?php get_header()?>
 
    <!-- Container -->
    <div class="container index">

      <?php 
         while (have_posts()) :
                the_post();
                
                get_template_part('partials/content','index');
                get_template_part('hero-image');
                get_template_part('boats');
                get_template_part('team-members');
         endwhile;
         ?>
 
    </div>

<?php get_footer()?>

  

  