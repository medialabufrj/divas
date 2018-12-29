<?php
  while(have_posts()):
    the_post();
    if(get_the_category()[0]->slug == 'grito'){
      get_template_part('single','post-grito');
    } else {
      get_template_part('single','post-revista');
    }
  endwhile;
?>