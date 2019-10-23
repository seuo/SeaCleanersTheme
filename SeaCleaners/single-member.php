
<?php get_header() ?>
 
 <!-- Container -->

 <?php
       while (have_posts()) :
           the_post();
          get_template_part('partials/content','single-member');
        endwhile;
 ?>



<?php get_footer()?>
