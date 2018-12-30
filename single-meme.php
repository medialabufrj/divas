<?php while(have_posts()): the_post(); ?>
  <div class="page-title">
    <div class="w-container">
      <h2 class="page-title-subheading">MEME</h2>
      <h1 class="post-title-heading"><?php the_title(); ?></h1>
      <figure class="meme-detail">
        <?php the_post_thumbnail('large'); ?>
      </figure>
    </div>
  </div>
<?php endwhile; ?>