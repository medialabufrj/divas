<div class="page-title">
  <div class="w-container">
    <h1 class="page-title-heading">Divas</h1>
  </div>
</div>
<div class="w-container">
  <div class="page-text">
    <div class="w-dyn-list">
      <div class="w-dyn-items w-row">
      <?php 
        $args = array (
          'post_type' => 'diva',
          'numberposts' => -1,
          'orderby' => 'title',
          'order'   => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'diva_destaque',
              'value' => true
            )
          )
        );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : 
          setup_postdata($post);
      ?>
        <div class="w-dyn-item w-col w-col-6">
          <a href="<?php the_permalink(); ?>" class="w-inline-block">
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="diva-image">
                  <?php the_post_thumbnail('square-medium'); ?>
                </div>
              </div>
              <div class="w-col w-col-8">
                <h4 class="diva-name"><?php the_title(); ?></h4>
                <p class="diva-text"><?php the_field('diva_bio'); ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
      </div>
      <!--
      <div class="w-dyn-empty">
        <p>No items found.</p>
      </div>
      -->
    </div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <h3 class="page-body-head">Colaboradoras</h3>
    <div class="w-dyn-list">
      <div class="w-clearfix w-dyn-items w-row">
      <?php 
        $args = array (
          'post_type' => 'diva',
          'numberposts' => -1,
          'orderby' => 'title',
          'order'   => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'diva_destaque',
              'value' => 0
            )
          )
        );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : 
          setup_postdata($post);
      ?>
        <div class="w-dyn-item w-col w-col-4">
          <a href="<?php the_permalink(); ?>" class="diva-link w-inline-block">
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="diva-image">
                  <?php the_post_thumbnail('square-small'); ?>
                </div>
              </div>
              <div class="w-col w-col-8">
                <h4 class="diva-name"><?php the_title(); ?></h4>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
      </div>
      <!--
      <div class="w-dyn-empty">
        <p>No items found.</p>
      </div>
      -->
    </div>
    <div class="spacer"></div>
    <h3 class="page-body-head">Créditos</h3>
    <p class="credits-text">
      Webdesign: <a href="http://marlus.com" target="_blank">Marlus Araujo</a>
      <br>Design gráfico: Octavio Mendes
    </p>
  </div>
</div>