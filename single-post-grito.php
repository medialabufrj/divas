<div class="grito-section">
  <div class="w-container">
    <?php if(get_field('grito_epigrafe')): ?>
    <div class="grito-post-pretexto w-richtext"><?php the_field('grito_epigrafe'); ?></div>
    <div class="spacer"></div>
    <?php endif; ?>
    <h1 class="grito-post-title"><?php the_title(); ?></h1>
    <div class="grito-post-divas w-dyn-list">
      <div class="w-dyn-items">
        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'post_divas',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
      ?>

      <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
        <div class="w-dyn-item">
          <a href="<?php the_permalink(); ?>" class="grito-post-diva">
            <?php the_title(); ?>
          </a>
        </div>
      <?php endwhile; ?>

      <?php 
        wp_reset_postdata();
        endif;
      ?>
      </div>
    </div>
    <div class="grito-post-content w-richtext">
      <?php the_content(); ?>
    </div>
  </div>
</div>