<?php while(have_posts()): the_post(); ?>
  <div class="page-title">
    <div class="w-container">
      <h1 class="page-title-heading"><?php the_title(); ?></h1>
    </div>
  </div>
  <div>
    <div class="w-container">
      <div class="page-text">
        <h3 class="subheading lato">BAIXE OS MEMES E ESPALHE</h3>
        <p class="lato">Clique no meme, faça o download e compartilhe!</p>
        <div class="w-dyn-list">
          <div class="w-clearfix w-dyn-items w-row">
          <?php 
            $args = array ('post_type' => 'meme');
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : 
              setup_postdata($post);
              $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID,'square-medium'));
          ?>
            <div class="w-dyn-item w-col w-col-3">
              <a href="<?php the_permalink(); ?>" target="_blank" class="meme w-inline-block" style="background-image: url(<?php echo $url; ?>);"></a>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>