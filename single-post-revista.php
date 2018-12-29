<div class="page-title">
  <div class="w-container">
    <h2 class="page-title-subheading"><?php echo get_the_category()[0]->name; ?></h2>
    <h1 class="post-title-heading"><?php the_title(); ?></h1>
  </div>
</div>
<div>
  <div class="post-wrapper w-container">
    <div class="w-dyn-list">
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
          <a href="<?php the_permalink(); ?>" class="simple-link">
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
    <div class="spacer"></div>
    <div class="post-body w-richtext"><?php the_content(); ?></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <?php
      $connected = new WP_Query( array(
        'connected_type' => 'revista_posts',
        'connected_items' => get_queried_object(),
        'nopaging' => true,
      ) );

      if ( $connected->have_posts() ) :
    ?>

    <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
      
      <a href="<?php the_permalink(); ?>" class="link-block-2 w-inline-block">
        <figure class="post-related-revista"><?php the_post_thumbnail('small'); ?></figure>
      </a>

      <div class="div-block">
        <div>Voltar para</div>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php endwhile; ?>
          
    <?php 
      wp_reset_postdata();
      endif;
    ?>

  </div>
</div>