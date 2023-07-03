
	<div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading"><?= $title ?></div>
				</div>
			</div>
			<div class="row posts-entry">
				<div class="col-lg-8">

			
				<?php foreach($resultado as $post) :?>
					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="post.html" class="img-link me-4">
							<img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date"><?=$post['data'] ?></span>
							<h2><a href="post.html"><?=$post['titulo'] ?></a></h2>
							<p><?=$post['descricao'] ?></p>
							<p><a href="post.html" class="btn btn-sm btn-outline-primary">Ler mais</a></p>
						</div>
					</div>
				<?php endforeach; ?>
					
					<div class="row text-start pt-5 border-top">
						<div class="col-md-12">
							<div class="custom-pagination">
								<span>1</span>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>...</span>
								<a href="#">15</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-4 sidebar">
					
					<!-- END sidebar-box -->
					<div class="sidebar-box">
						<h3 class="heading">Popular Posts</h3>
						<div class="post-entry-sidebar">
							<ul>
								<li>
									<a href="">
										<img src="images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- END sidebar-box -->
				</div>
			</div>
		</div>
	</div>

	