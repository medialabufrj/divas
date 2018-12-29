<?php while(have_posts()): the_post(); ?>
  <div class="page-title">
    <div class="w-container">
      <h1 class="page-title-heading diva"><?php the_title(); ?></h1>
    </div>
  </div>
  <div>
    <div class="page-text w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <?php the_field('diva_bio'); ?>
          <div class="spacer"></div>
          <h3 class="simple-head">posts</h3>
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
                  <a href="<?php the_permalink(); ?>" class="simple-link w-inline-block">
                    <div class="diva-post-cat"><?php echo get_the_category()[0]->name; ?></div>
                    <h4 class="diva-post-title"><?php the_title(); ?></h4>
                  </a>
                </div>
              <?php endwhile; ?>

              <?php 
                wp_reset_postdata();
                endif;
              ?>
              
            </div>
            <!--
            <div class="w-dyn-empty">
              <p>No items found.</p>
            </div>
            -->
          </div>
          <!--
          <div>
            <h3 class="simple-head">O GRITO</h3>
            <div class="w-dyn-list">
              <div class="w-dyn-items">
                <div class="w-dyn-item">
                  <a href="#" class="simple-link w-inline-block">
                    <div class="diva-post-cat date"></div>
                    <h4 class="diva-post-title"></h4>
                  </a>
                </div>
              </div>
              <div class="diva-grito-empty w-dyn-empty">
                <div class="text-block">Nenhum grito por enquanto...</div>
              </div>
            </div>
          </div>
        -->
        </div>
        

        <div class="w-col w-col-6">
          <figure class="diva-single-photo">
            <?php the_post_thumbnail('medium'); ?>
          </figure>
        </div>

      </div>
    </div>
  </div>
<?php endwhile; ?>