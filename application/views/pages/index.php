<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="post.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_consulta.jfif'); background-size: contain;"></div>

						<div class="text">
							<span class="date">29/06/2023</span>
							<h2>Consultar dados do Veículo através da Placa</h2>
						</div>
					</a>
					<a href="post.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/cenprot.svg'); background-size: contain;"></div>

						<div class="text">
							<span class="date">29/06/2023</span>
							<h2>Consulta grátis de Protesto em todo o Brasil</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="post.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('images/5132329.jpg'); background-size: contain;"></div>

						<div class="text">
							<span class="date">29/06/2023</span>
							<h2>Novo Suporte Online</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="post.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_3_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Startup vs corporate: What job suits you best?</h2>
						</div>
					</a>
					<a href="post.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/img_4_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Thought you loved Python? Wait until you meet Rust</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	<section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Recentes</h2>
				</div>
				
			</div>
				<div class="row">
				<?php foreach($posts as $post) : ?>
					<div class="col-lg-4 mb-4">
						<div class="post-entry-alt">
							<a href="<?= base_url('') ?>post/<?= $post['id'] ?>" class="img-link"><img src="<?= $post['caminhoImg'] ?>" alt="Image" class="img-fluid" style="heigth: 100%; width: 100%"></a>
							<div class="excerpt">
								
							
								<h2><a href="post.html"><?= $post['titulo'] ?></a></h2>
								<div class="post-meta align-items-center text-left clearfix">
									<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
									<span class="d-inline-block mt-1">Por <a href="#"><?= $post['autor'] ?></a></span>
									<span>&nbsp;-&nbsp; <?= $post['data'] ?></span>
								</div>

								<p><?= $post['descricao'] ?></p>
								<p><a href="<?= base_url('post') ?>" class="read-more">Continuar Lendo</a></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	