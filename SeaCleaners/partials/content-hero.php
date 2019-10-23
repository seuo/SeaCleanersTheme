
<header class="masthead hero-style" style="background-image: url( <?php the_field('image')?>); background-position-y:<?php the_field('background_position')?>%; height:<?php the_field('hero_height')?>vh;">
    <div class="container">
      <div class="intro-text" style="width:<?php the_field('intro_text_width')?>%; text-align:<?php the_field('intro_text_align')?>; padding-top:<?php the_field('intro_padding_top')?>%; padding-bottom:<?php the_field('intro_padding_bottom')?>%;">
            <div class="intro-lead-in" style="color:<?php the_field('title_color')?>; padding-top:<?php the_field('title_padding_top')?>%; padding_bottom:<?php the_field('title_padding_bottom')?>%;">
            <?php the_title()?>
            </div>
            <div class="text-uppercase" style="color:<?php the_field('mission_color')?>; padding_top:<?php the_field('mission_padding_top')?>%; padding-bottom:<?php the_field('mission_padding_bottom')?>%;"><?php the_content()?></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><?php the_field('call_to_action')?></a>
         </div>
   </div>
</header>