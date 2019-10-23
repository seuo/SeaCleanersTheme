

         <div class="col-sm-2">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php the_field('photo')?>" alt="">
            <h4><?php the_title()?></h4>
            <p class="text-muted"><?php the_field('position')?></p>
            <p>

               <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  More Info
               </button>
               </p>
               <div class="collapse" id="collapseExample">
               <div class="card card-body">
                  <?php the_content()?>
               </div>
               </div>
          </div>
        </div>

