<?php while(have_posts()): the_post(); ?>
<?php
  $connected = new WP_Query( array(
    'connected_type' => 'revista_memes',
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
      <h2 class="page-title-subheading">MEME</h2>
      <h1 class="post-title-heading"><?php the_title(); ?></h1>
      <figure class="meme-detail">
        <?php the_post_thumbnail('large'); ?>
      </figure>
    </div>
  </div>
<?php endwhile; ?>