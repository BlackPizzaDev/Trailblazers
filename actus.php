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
				<div class="Actualites-H2-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h2>À la une</h2>
				</div>
				<div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<?php require 'components/article-xl.php'; ?>
				</div>
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
				<?php require 'footer.php'; ?>
			<!-- FOOTER -->
		</div>
	</main>
	<?php require 'script.php'; ?>
</body>
