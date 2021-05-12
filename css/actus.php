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
							<h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h4>
						</div>
					</div>
				</div>
			</header>
		</div>
		<?php require 'menu.php'; ?>
		<!-- HEADER -->
		<div class="AllSite">
			<!-- FOOTER -->
			<?php require 'footer-html.php'; ?>
			<!-- FOOTER -->
		</div>
	</main>
	<?php require 'footer.php'; ?>
</body>