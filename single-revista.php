<?php while(have_posts()): the_post(); ?>

  <div class="page-title">
    <div class="w-container">
      <h1 class="page-title-heading"><?php the_title(); ?></h1>
    </div>
  </div>
  <div>
    <div class="w-container">
      <div class="page-revista">
        <h3 class="subheading">Nesta edição</h3>
        <div class="w-dyn-list">
          <div class="w-clearfix w-dyn-items w-row">
        <?php

          $connected = new WP_Query( array(
            'connected_type' => 'revista_posts',
            'connected_items' => get_queried_object(),
            'nopaging' => true,
          ) );

          if ( $connected->have_posts() ) :
        ?>

        <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
          
          
            <div class="revista-post-item w-dyn-item w-col w-col-4">
              <a href="<?php the_permalink(); ?>" class="post-item w-inline-block">
                <?php the_post_thumbnail(); ?>
                <!-- <img src="" alt="" class="post-item-image"> -->
                <h4 class="post-cat"><?php echo get_the_category()[0]->name; ?></h4>
                <h3 class="post-title"><?php the_title(); ?></h3>
              </a>
            </div>
          

        <?php endwhile; ?>
              
        <?php 
          wp_reset_postdata();
          endif;
        ?>

        </div>
          
          <!--
          <div class="revista-nenhum-artigo w-dyn-empty">
            <p>Em breve novas publicações</p>
          </div>
          -->
        </div>

        <?php if(get_field('revista_embed')): ?>
          <div class="spacer"></div>
          <?php the_field('revista_embed'); ?>
          <div class="spacer"></div>
        <?php endif; ?>
        
        <!-- <div class="w-embed w-iframe"><iframe src="" width="800" height="400"></iframe></div> -->
        <!-- <div class="w-video w-embed"></div> -->
        
        <?php if(get_field('revista_publitas')): ?>
        <div class="publitas-block">
          <div class="spacer"></div>
          <a href="<?php the_field('revista_publitas'); ?>" target="_blank" class="botao-ver-impressa w-button">folhear a revista impressa</a>
          <div class="spacer"></div>
        </div>
        <?php endif; ?>
        
        <div class="spacer"></div>
        
        <?php
        
          $connected = new WP_Query( array(
            'connected_type' => 'revista_memes',
            'connected_items' => get_queried_object(),
            'nopaging' => true,
          ) );

          if ( $connected->have_posts() ) :
        ?>
        
        <div>
          <h3 class="subheading">BAIXE OS MEMES E ESPALHE</h3>
          <p class="align-left">Clique na imagem, faça o download e compartilhe!</p>
          <div class="w-dyn-list">
            <div class="w-clearfix w-dyn-items w-row">

            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
              
              <?php
                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID,'square-medium'));
              ?>
              <div class="w-dyn-item w-col w-col-3">
                <a href="<?php the_permalink(); ?>" target="_blank" style="background-image: url(<?php echo $url; ?>);" class="meme w-inline-block"></a>
              </div>

            <?php endwhile; ?>
        
            </div>
          </div>
        </div>

        <?php 
          wp_reset_postdata();
          endif;
        ?>

              
            

<?php endwhile; ?>