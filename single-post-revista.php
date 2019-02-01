<?php
  $connected = new WP_Query( array(
    'connected_type' => 'revista_posts',
    'connected_items' => get_queried_object(),
    'nopaging' => true,
  ) );

  if ( $connected->have_posts() ) :
    while ( $connected->have_posts() ) :

      $connected->the_post();

      $revista_header = get_field('revista_header');
      $revista_permalink = get_permalink();
      $revista_thumbnail = get_the_post_thumbnail(get_the_ID(),'small');
      $revista_title = get_the_title();
      
    endwhile;

    wp_reset_postdata();
  endif;
?>

<div class="page-title" style="background-image: url(<?php echo $revista_header["url"]; ?>);">
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
    
      
      <a href="<?php echo $revista_permalink; ?>" class="link-block-2 w-inline-block">
        <figure class="post-related-revista"><?php echo $revista_thumbnail; ?></figure>
      </a>

      <div class="div-block">
        <div>Voltar para</div>
        <a href="<?php echo $revista_permalink; ?>"><?php echo $revista_title; ?></a>
      </div>

  </div>
</div>