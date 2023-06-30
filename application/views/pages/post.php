 <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?= base_url('')?>/images/20215.jpg');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4"><?= $postid['titulo'] ?></h1>
            <div class="post-meta align-items-center text-center">
             
              <span class="d-inline-block mt-1">Por <?= $postid['autor'] ?></span>
              <span>&nbsp;-&nbsp; <?= $postid['data'] ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
            <div class="row my-4 align-items-center">
              <div class="col-md-12 mb-7">
                <img src="<?= base_url('')?>/<?=$postid['caminhoImg'] ?>" alt="Image placeholder" class="img-fluid rounded">
              </div>
        
            </div>
            <p><?= $postid['descricao'] ?></p>
          </div>


          <div class="pt-5">
            <p>Categoria:  <a href="#"><?=$postid['categoria']?></a>
          </div>


          <div class="pt-5 comment-wrap">
            <h3 class="mb-5 heading">6 Comentarios</h3>
            <ul class="comment-list">

              <li class="comment">
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>

            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Comentar</h3>
              <form action="<?= base_url() ?>post/addComentario" method="post" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Nome *</label>
                  <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                  <label for="email">E-mail *</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                  <label for="message">Comentário</label>
                  <textarea name="comentario" id="comentario" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Comentar" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
  
          <!-- END sidebar-box -->  
          <div class="sidebar-box">
            <h3 class="heading">Posts Populares</h3>
            <div class="post-entry-sidebar">
              <ul>

							<?php foreach($posts as $post) : ?>
                <li>
                  <a href="<?= base_url('') ?>post/details/<?= $post['id'] ?>">
                    <img src="<?= base_url('') ?>/<?= $post['caminhoImg'] ?>" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4><?= $post['titulo'] ?></h4>
                      <div class="post-meta">
                        <span class="mr-2"><?= $post['data'] ?></span>
                      </div>
                    </div>
                  </a>
                </li>
								<?php endforeach; ?>

              </ul>
            </div>
          </div>
          <!-- END sidebar-box -->

      </div>
    </div>
  </section>


  <!-- Start posts-entry -->
  <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-uppercase text-black">Outros Posts</div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="post.html">Thought you loved Python? Wait until you meet Rust</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
       
        </div>
      </div>
    </div>
  </section>
  <!-- End posts-entry -->

 