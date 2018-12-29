<?php while(have_posts()): the_post(); ?>
  <div class="page-title">
    <div class="w-container">
      <h1 class="page-title-heading"><?php the_title(); ?></h1>
    </div>
  </div>
  <div>
    <div class="w-container">
      <div class="page-text center">
        <?php the_content(); ?>
        <div class="spacer"></div>
        <div class="w-row">
          <div class="contato-col w-col w-col-4"><a href="mailto:revistadr@gmail.com" class="w-inline-block"><img src="<?php echo WP_THEME_URL ?>/images/social-mail.svg" alt="" class="contato-icon"></a>
            <p><a href="mailto:revistadr@gmail.com" class="text-link">revistadr@gmail.com</a></p>
          </div>
          <div class="contato-col w-col w-col-4"><a href="https://www.facebook.com/RevistaDRdivas/" target="_blank" class="w-inline-block"><img src="<?php echo WP_THEME_URL ?>/images/social-fb.svg" alt="" class="contato-icon"></a>
            <p><a target="_blank" href="https://www.facebook.com/RevistaDRdivas/" class="text-link">fb.com/RevistaDRdivas</a></p>
            <div class="w-widget w-widget-facebook"><iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2FRevistaDRdivas&amp;layout=button_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 90px; height: 20px;"></iframe></div>
          </div>
          <div class="contato-col w-col w-col-4"><a href="https://twitter.com/dr_revista" target="_blank" class="w-inline-block"><img src="<?php echo WP_THEME_URL ?>/images/social-tw.svg" alt="" class="contato-icon"></a>
            <p><a target="_blank" href="https://twitter.com/dr_revista" class="text-link">twitter.com/dr_revista</a></p>
            <div class="w-widget w-widget-twitter"><iframe src="https://platform.twitter.com/widgets/tweet_button.html#url=http%3A%2F%2Frevistadr.com.br&amp;counturl=revistadr.com.br&amp;text=DR%20%C3%A9%20uma%20revista%20de%20pol%C3%ADtica%20e%20de%20cultura%20feita%20por%20mulheres.%20Siga%20%40dr_revista&amp;count=none&amp;size=m&amp;dnt=true" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 62px; height: 20px;"></iframe></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>