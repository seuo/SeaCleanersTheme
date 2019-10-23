
<?php get_header()?>
 
    <!-- Container -->
    <div>

      <?php 
         while (have_posts()) :
                the_post();
                get_template_part('partials/content','index');
         endwhile;
         ?>
 
    </div>

<?php get_footer()?>

  

  