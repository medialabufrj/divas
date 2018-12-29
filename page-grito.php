<?php while(have_posts()): the_post(); ?>
<div class="grito-section">
  <div class="w-container">
    <h1 class="grito-logo"><?php the_title(); ?></h1>
    <div class="grito-apresenta">
      <?php the_content(); ?>
    </div>
    <div class="spacer"></div>
    <div class="w-dyn-list">
      <div class="w-dyn-items">
        <?php 
          $args = array (
            'post_type' => 'post',
            'category_name' => 'grito',
            'numberposts' => -1
          );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) : 
            setup_postdata($post);
        ?>
        <div class="grito-loop-row w-dyn-item">
          <div class="w-row">
            <div class="w-col w-col-3">
              <a href="<?php the_permalink(); ?>" class="w-inline-block">
                <figure class="grito-loop-img">
                  <?php the_post_thumbnail('square-medium'); ?>
                </figure>
              </a>
            </div>
            <div class="w-col w-col-9">
              <a href="<?php the_permalink(); ?>" class="grito-loop-link w-inline-block">
                <div class="grito-loop-date"><?php the_time(get_option('date_format')); ?></div>
                <h2 class="grito-loop-title"><?php the_title(); ?></h2>
                <div><?php the_excerpt(); ?></div>
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>