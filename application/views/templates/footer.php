<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Sobre</h3>
						<p>Com atuação no interior de São Paulo, a Light System está no mercado desde 1998, oferecendo softwares completos para a gestão da sua empresa e serviços que facilitam a rotina diária trazendo mais agilidade e produtividade para a sua empresa.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="https://www.instagram.com/lightsysteminformatica/" target="_blank"><span class="icon-instagram"></span></a></li>
							<li><a href="https://www.facebook.com/LightsystemInformatica/" target="_blank"><span class="icon-facebook" ></span></a></li>
							<li><a href="https://www.linkedin.com/in/light-system-inform%C3%A1tica-670606124" target="_blank"><span class="icon-linkedin"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Links</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="https://www.lightsystemsoft.com.br/ls/sobre.php" target="_blank">Sobre nós</a></li>
							<li><a href="https://www.lightsystemsoft.com.br/ls/suporte.php" target="_blank">Suporte</a></li>
							<li><a href="http://www.lightsystemsoft.com.br/Franquia/" target="_blank">Seja um Franqueado</a></li>
							<li><a href="https://www.lightsystemsoft.com.br/ls/dicas.php" target="_blank">Dicas</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Posts Recentes</h3>
						<div class="post-entry-footer">
							<ul>
             		<?php foreach($postsRecentes as $postsRecentes) : ?>
								<li>
									<a href="<?= base_url() ?>post<?= $postsRecentes['id'] ?>">
										<img src="<?= $postsRecentes['caminhoImg'] ?>" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4><?= $postsRecentes['titulo'] ?></h4>
											<div class="post-meta">
												<span class="mr-2"><?= $postsRecentes['data'] ?></span>
											</div>
										</div>
									</a>
								</li>
              		<?php endforeach; ?>
							</ul>
						</div>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->
<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    
  </body>
  </html>
