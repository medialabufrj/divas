
  <div class="revistas">
    <div class="revistas-container w-container">
      <div class="w-dyn-list">
        <div class="w-clearfix w-dyn-items w-row">

        <?php 
          $args = array ('post_type' => 'revista');
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) : 
            setup_postdata($post);
        ?>

          <div class="revista-item w-dyn-item w-col w-col-3">
            <a href="<?php the_permalink(); ?>" class="revista-item-link w-inline-block">
              <?php the_post_thumbnail('square-medium'); ?>
              <h3 class="revista-title"><?php the_title(); ?></h3>
            </a>
          </div>

        <?php endforeach; ?>

        </div>
        <!-- <div class="w-dyn-empty">
          <p>No items found.</p>
        </div> -->
      </div>
    </div>
  </div>
  