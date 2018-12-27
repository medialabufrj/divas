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
            <div class="revista-post-item w-dyn-item w-col w-col-4"><a href="#" class="post-item w-inline-block"><img src="" alt="" class="post-item-image"><h4 class="post-cat"></h4><h3 class="post-title"></h3></a></div>
          </div>
          <div class="revista-nenhum-artigo w-dyn-empty">
            <p>Em breve novas publicações</p>
          </div>
        </div>
        <div class="w-embed w-iframe"><iframe src="" width="800" height="400"></iframe></div>
        <div class="w-video w-embed"></div>
        <div class="publitas-block">
          <div class="w-dyn-list">
            <div class="w-dyn-items">
              <div class="w-dyn-item">
                <div class="spacer"></div><a href="#" target="_blank" class="botao-ver-impressa w-button">folhear a revista impressa</a>
                <div class="spacer"></div>
              </div>
            </div>
            <div class="hide-empty w-dyn-empty">
              <p>No items found.</p>
            </div>
          </div>
        </div>
        <div class="spacer"></div>
        <div>
          <h3 class="subheading">BAIXE OS MEMES E ESPALHE</h3>
          <p class="align-left">Clique na imagem, faça o download e compartilhe!</p>
          <div class="w-dyn-list">
            <div class="w-clearfix w-dyn-items w-row">
              <div class="w-dyn-item w-col w-col-3"><a href="#" target="_blank" class="meme w-inline-block"></a></div>
            </div>
            <div class="w-dyn-empty">
              <p>No items found.</p>
            </div>
          </div>
        </div>

<?php endwhile; ?>