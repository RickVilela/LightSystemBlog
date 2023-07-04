<!-- #ff3434 -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="http://www.lightsystemsoft.com.br/servicos/whatsapp/"  target="_blank" class="h-entry mb-30 v-height gradient" data-toggle="modal" data-src="https://www.youtube.com/embed/JJUo8Fe3_JY" data-target="#myModal">

						<div class="featured-img" style="background-image: url('images/intro-mobile.png'); background-size: contain;"></div>

						<div class="text">
							<span class="date"></span>
							<h2>WhatsApp - Envie mensagens diretamente do Sistema!</h2>
						</div>
					</a>
					<a href="http://www.lightsystemsoft.com.br/servicos/mbackup/" target="_blank" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/backup.jpg'); background-size: contain;"></div>

						<div class="text">
							<span class="date"></span>
							<h2>Mbackup - Evite a perda dos seus dados!</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="https://www.lightsystemsoft.com.br/ls/suporte.php" target="_blank" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('images/5132329.jpg'); background-size: contain;"></div>

						<div class="text">
							<span class="date"></span>
							<h2>Novo Suporte Online</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://www.lightsystemsoft.com.br/servicos/pedidoweb/" target="_blank" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('images/pedido-web.jpg');"></div>

						<div class="text">
							<span class="date"></span>
							<h2>Pedido Web - Realize os Pedidos de qualquer lugar!</h2>
						</div>
					</a>
					<a href="https://www.connectmobile.com.br/" target="_blank" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('images/mobile.jpg');"></div>

						<div class="text">
							<span class="date"></span>
							<h2>Connect Mobile - Uma nova forma de Vender</h2>
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
					<h2 class="posts-entry-title">Novidades</h2>
				</div>
				
			</div>
				<div class="row">
				<?php foreach($posts as $post) : ?>
					<div class="col-lg-4 mb-4">
						<div class="post-entry-alt">
							<a href="<?= base_url('') ?>post/details/<?= $post['id'] ?>" class="img-link"><img src="<?= $post['caminhoImg'] ?>" alt="Image" class="img-fluid" style="heigth: 100%; width: 100%"></a>
							<div class="excerpt">
				
								<h2><a href="<?= base_url('') ?>post/details/<?= $post['id'] ?>"><?= $post['titulo'] ?></a></h2>
								<div class="post-meta align-items-center text-left clearfix">
									<span class="d-inline-block mt-1">Por <a href="#"><?= $post['autor'] ?></a></span>
									<span>&nbsp;-&nbsp; <?= $post['data'] ?></span>
								</div>

								<p><?= $post['descricao'] ?></p>
								<p><a href="<?= base_url('') ?>post/details/<?= $post['id'] ?>" class="read-more">Continuar Lendo</a></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	