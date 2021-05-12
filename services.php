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
							<h6 class="MarginBottom-20px">Services</h6>
							<h4>Un accompagement sur-mesure pour atteindre les objectifs.</h4>
						</div>
					</div>
				</div>
			</header>
		</div>
		<?php require 'menu.php'; ?>
		<!-- HEADER -->
		<div class="AllSite">
			<!-- SERVICES -->
			<div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<img class="Cabinet-Section-Background" src="img/shapes/triangle-composition.svg" alt="	Background">
			</div>
			<section class="Cabinet-Section Content-Small">
				<div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h2>Stratégie globale</h2>
				</div>
				<div class="Services-Content-Box RightWrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h5>Champs d'intervention</h5>
					<ul>
						<li class="Li-Main">Intervention auprès des CDO, Dir Commerciales, DGs & MDs</li>
						<li class="Li-Main">Définir du rôle du Digital au sein de l'entreprise et de ses activités pour participer à accélérer la croissance de l'entreprise et de ses équipes</li>
						<li class="Li-Main">Valorisation de la stratégie digital : Business Model, Bus Plan, Coûts et organisations nécessaires.</li>
					</ul>
				</div>
				<div class="Services-Content-Box RightWrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h5>Profil associé : experts digitaux</h5>
					<ul>
						<li class="Li-Main">15-20 ans d'expérience</li>
						<li class="Li-Main">Des fonctions de Direction/Management et de gestion de PnL/Activités : Ex-CDO, ex-Dir e-comm, ex-MD de boite de Mkt/Comm...</li>
						<li class="Li-Main">Des postes dans des grands groupes & start-ups early-stages </li>
					</ul>
				</div>
				<div class="Services-DropDowns" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<div id="DropDown" class="DropDown DropDown-XL">
						<h2 class="H2-DropDown" id="test" tabindex="0">Déclinaison
							<span class="Add-XL" tabindex="0">+</span>
							<span class="Less-XL" tabindex="0">-</span>
						</h2>
						<div id="DropDown-Options" class="DropDown-Options-XL MarginTop-25px" tabindex="0">
							<h5 class="MarginBottom-30px">Champs d'intervention</h5>
							<ul>
								<li class="Li-Main">Intervention auprès des CDO, Directeurs Commercials, DGs & MDs</li>
								<li class="Li-Main">Définition du rôle du Digital au sein de l’entreprise et de ses activités pour participer à accélérer la croissance de l’entreprise et de ses équipes
								</li>
								<li class="Li-Main">Intervention auprès des CDO, Directeurs Commercials, DGs & MDs
								</li>
							</ul>
						</div>
					</div>
					<div id="DropDown" class="DropDown DropDown-XL">
						<h2 class="H2-DropDown" tabindex="0">Implémentation
							<span class="Add-XL" tabindex="0">+</span>
							<span class="Less-XL" tabindex="0">-</span>
						</h2>
						<div id="DropDown-Options" class="DropDown-Options-XL MarginTop-25px" tabindex="0">
							<h5 class="MarginBottom-30px">Champs d'intervention</h5>
							<ul>
								<li class="Li-Main">Intervention auprès des CDO, Directeurs Commercials, DGs & MDs</li>
								<li class="Li-Main">Définition du rôle du Digital au sein de l’entreprise et de ses activités pour participer à accélérer la croissance de l’entreprise et de ses équipes
								</li>
								<li class="Li-Main">Intervention auprès des CDO, Directeurs Commercials, DGs & MDs
								</li>
							</ul>
						</div>
					</div>
				</div>
				</section>
				<!-- SERVICES -->
				<!-- SERVICE -->
			<section class="Section-Services-Margin Content-Full">
				<div class="Section-Services Content">
					<img data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" class="Photo-Domaine" src="img/photos/photo-domaine.png" alt="Shapes">
					<img data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" class="Triangle-Domaine" src="img/shapes/triangle-white-domaine.svg" alt="Shapes">
					<?php require 'components/box-services-page.php';?>
				</div>
			</section>
			<section class="Cabinet-References Content-Small">
				<div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h2>Clients & Références</h2>
				</div>
				<div class="Services-Content-Box RightWrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vehicula a nisi elementum porta. Ut in massa sem.</h5>
				</div>
			</section>
			<!-- SERVICE -->
				<!-- FOOTER -->
				<?php require 'footer-html.php'; ?>
				<!-- FOOTER -->
			</div>
		</main>
		<?php require 'footer.php'; ?>
	</body>
