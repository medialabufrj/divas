<?php while(have_posts()): the_post(); ?>
  <div class="page-title">
    <div class="w-container">
      <h1 class="page-title-heading"><?php the_title(); ?></h1>
    </div>
  </div>
  <div>
    <div class="w-container">
      <div class="page-text">
        <?php the_content(); ?>  
      </div>
    </div>
  </div>
<?php endwhile; ?>