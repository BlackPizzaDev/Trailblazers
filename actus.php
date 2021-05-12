<body data-barba="wrapper">
	<?php require 'head.php'; ?>

	<main data-barba="Container" data-barba-namespace="home">
		<div id="ContactPointer">
			<div class="Pointer"></div>
		</div>
		<!-- HEADER -->
		<div class="Content-Full NoPointer">
			<header class="Content">
				<div class="Nav-Fixed">
					<?php require 'nav.php'; ?>
				</div>
				<div class="Template-Head">
					<div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<img src="img/shapes/header-triangle-blue.svg">
						<div class="Template-Head-Box">
							<h6 class="MarginBottom-20px">Actualités</h6>
							<h4>Retrouvez nos conseils et toute notre actualité.</h4>
						</div>
					</div>
				</div>
			</header>
		</div>
		<?php require 'menu.php'; ?>
		<!-- HEADER -->
		<div class="AllSite">
			<section class="Actualites-Section Content-Small">
				<div class="Actualites-H2-Box">
					<h2>À la une</h2>
					<img class="Cabinet-Actus-Background" src="img/shapes/triangle-composition.svg" alt="	Background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				</div>
				<?php require 'components/article-xl.php'; ?>
			</section>
			<!-- ARTICLE -->
			<section class="Section-Articles">
				<div class="Content-Small">
					<div class="Box-Articles-4X">
						<div class="Box-Articles-2X" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<?php require 'components/article.php';?>
							<?php require 'components/article.php';?>
						</div>
						<div class="Box-Articles-2X" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<?php require 'components/article-image.php';?>
							<?php require 'components/article.php';?>
						</div>
					</div>
				</div>
			</section>
			<section class="Section-Articles Section-Articles-Trends">
				<div class="Content-Small">
					<h2 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">À lire aussi</h2>
					<div class="Box-Articles-4X">
						<div class="Box-Articles-2X" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<?php require 'components/article.php';?>
							<?php require 'components/article.php';?>
						</div>
						<div class="Box-Articles-2X" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<?php require 'components/article.php';?>
							<?php require 'components/article.php';?>
						</div>
					</div>
				</div>
			</section>
			<!-- ARTICLE -->
			<!-- FOOTER -->
			<footer class="Section-Footer Section-Footer-Actus Content-Full">
				<div class="Content-small">
					<div class="Box-Footer-Social" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<a href="tel:+33 6 42 45 05 24" class="Footer-Link">+33 6 42 45 05 24</a>
						<div>
							<a href="#!" class="Footer-Link">Twitter</a>
							<a href="#!" class="Footer-Link">Linkedin</a>
						</div>
					</div>
					<div data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<div class="Box-Footer-Mailto">
							<p class="Color-White">Une demande ? Un projet ?</p>
							<a class="Box-Footer-Mailto-Link" href="#!">Nous écrire <img class="Box-Footer-Mailto-Arrow" src="img/a/arrow-footer.svg" alt="Continuer"></a>
						</div>
						<div class="Box-Footer-Links">
							<div>
								<a href="#!">Politiques de confidentialités</a>
								<a href="#!">Mentions légales</a>
							</div>
							<span class="Footer-Link-Copyright">© 2021 Trailblazers</span>
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER -->
		</div>
	</main>
	<?php require 'footer.php'; ?>
</body>
