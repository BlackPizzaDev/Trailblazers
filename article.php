<body data-barba="wrapper">
	<?php require 'head.php'; ?>

	<main data-barba="Container" data-barba-namespace="home">
		<div id="ContactPointer">
			<div class="Pointer"></div>
		</div>
		<!-- HEADER -->
		<div class="Content-Full NoPointer">
			<div data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h1>
						<a href="index.php">
							<img class="Logo" src="img/logo.svg">
						</a>
					</h1>
			</div>
			<header class="Content">
				<?php require 'nav.php'; ?>
				<div class="Template-Head">
					<div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<img data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" src="img/shapes/header-triangle-blue.svg">
						<div class="Template-Head-Box">
							<h6 class="MarginBottom-20px">Publié le 05.12.20</h6>
							<h4>Idées reçues sur la transformation des petites et moyennes entreprises</h4>
						</div>
					</div>
				</div>
			</header>
		</div>
		<?php require 'menu.php'; ?>
		<!-- HEADER -->
		<div class="AllSite">
			<div class="Article-Content Content-Small">
				<div class="Article-Share" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h6 class="Color-Black MarginBottom-20px">Partager</h6>
					<h5><a href="#!" class="Color-Purple">Twitter</a></h5>
					<h5><a href="#!" class="Color-Purple">LinkedIn</a></h5>
				</div>
				<div class="Article-Wrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<div class="Article-Cover">
						<img src="img/article/article-cover.jpg" alt="Image illustrant l'article">
						<figcaption>© Copyright 2021</figcaption>
					</div>
					<div class="Box-Article">
						<h5>Lorem ipsum dolor sit amet</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis elit vehicula quam ultrices pulvinar. Nulla dui arcu, consectetur ut condimentum ut, fermentum nec diam. Mauris tempor neque sed nulla convallis, vel imperdiet risus dapibus. Curabitur luctus ullamcorper nibh sit amet maximus.</p>
					</div>
					<div class="Box-Quote">
						<h4><span class="Color-Purple Quote">''</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
					</div>
					<div class="Box-Article">
						<h5>Lorem ipsum dolor sit amet</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis elit vehicula quam ultrices pulvinar. Nulla dui arcu, consectetur ut condimentum ut, fermentum nec diam. Mauris tempor neque sed nulla convallis, vel imperdiet risus dapibus. Curabitur luctus ullamcorper nibh sit amet maximus.</p>
					</div>
					<div class="Box-Article">
						<h5>Lorem ipsum dolor sit amet</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis elit vehicula quam ultrices pulvinar. Nulla dui arcu, consectetur ut condimentum ut, fermentum nec diam. Mauris tempor neque sed nulla convallis, vel imperdiet risus dapibus. Curabitur luctus ullamcorper nibh sit amet maximus.</p>
						<div class="Box-List">
							<ul>
								<li class="Li-Main">Stratégie globale</li>
								<li class="Li-Main">Déclinaison de la stratégie globale</li>
								<li class="Li-Main">Implémentation et mise en œuvre</li>
								<li class="Li-Secondary">Lorem ipsum</li>
								<li class="Li-Main">Lorem Ipsum</li>
							</ul>
						</div>
					</div>
					<div class="Box-Article">
						<h5>Lorem ipsum dolor sit amet</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis elit vehicula quam ultrices pulvinar. Nulla dui arcu, consectetur ut condimentum ut, fermentum nec diam. Mauris tempor neque sed nulla convallis, vel imperdiet risus dapibus. Curabitur luctus ullamcorper nibh sit amet maximus.</p>
					</div>
					<div class="Box-Pagination">
						<div>
							<a href="#!" class="CTA Link-Main Link-Main-Rotate Link-Article">
								Article précédent
								<img src="../img/a/arrow.svg" alt="Lien">
							</a>
						</div>
						<div>
							<a href="#!" class="CTA Link-Main">
								Article suivant
								<img src="../img/a/arrow.svg" alt="Lien">
							</a>
						</div>
					</div>			
				</div>
			</div>
			<!-- FOOTER -->
			<?php require 'footer.php'; ?>
			<!-- FOOTER -->
		</div>
	</main>
	<?php require 'script.php'; ?>
</body>