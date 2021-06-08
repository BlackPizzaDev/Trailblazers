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
							<h6 class="MarginBottom-20px">Recrutement</h6>
							<h4>Nous recherchons des talents Rejoingez-nous !</h4>
						</div>
					</div>
				</div>
			</header>
		</div>
		<?php require 'menu.php'; ?>
		<!-- HEADER -->
		<div class="Content Validation-Box Validation-Box-Offers">
			<a href="#!" class="Nav-Link Close Menu-Label Validation-Box-Close">Close</a>
			<div class="Validation-Content">
				<h2>Merci !</h2>
				<h5 class="MarginTop-10px">Nous vous remercions pour l'intérêt que vous nous portez.</h5>
				<a href="recrutement.php" class="CTA Link-Main MarginTop-30px">
					Retour aux offres
				<img src="../img/a/arrow.svg" alt="Lien">
				</a>
			</div>
		</div>
		<div class="Content Offers-Form-Box">
			<a href="#!" class="Nav-Link Close Menu-Label Offers-Box-Close">Close</a>
			<div class="Offers-Content">
				<h2 class="Color-white">Postulez</h2>
				<h5 class="Color-white">Informations</h5>
				<section class="Section-Formulaire-Offers Section-Formulaire">
					<div class="Formulaire">
						<div class="Input-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<label for="Nom">Nom<span>*</span></label>
							<input type="text" id="Nom" name="name" required>
						</div>
						<div class="Input-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<label for="Prénom">Prénom<span>*</span></label>
							<input type="text" id="Prénom" name="name" required>
						</div>
						<div class="Input-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<label for="Email">Email<span>*</span></label>
							<input type="email" id="Email" size="30" required>
						</div>
						<div class="Input-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<label for="Phone">Téléphone<span>*</span></label>
							<input type="phone" id="Phone" size="30" required>
						</div>
						<div class="Drop-File-Box">
							<div class="Drop-Box">+</div>
							<div class="Drop-Box-Content">
								<h5 class="Color-white">CV et documents</h5>
								<p>Le fichier ne doit pas dépasser 10MB, format accepté : PDF, Word, PNG, JPEG</p>
							</div>
						</div>
						<div class="CV-Box">
							<h5 class="Color-white">Lettre de motivation</h5>
							<p>Pourquoi souhaitez-vous nous rejoindre ?</p>
						</div>
						<div class="Input-Box Input-Box-Message" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<label for="Prénom">Message<span>*</span></label>
							<textarea name="Message" form="" maxlength="700"></textarea>
						</div>
						<div class="Button-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<p>J'ai lu et accepter les <span class="Color-Purple">CGU</span></p>
						
						<button type="submit" form="form1" value="Submit">
									<a href="#!" class="CTA-Offers-Form Button CTA CTA-Secondary">Envoyer<img src="../img/a/arrow.svg" alt="Lien"></a>
								</button>
						</div>
						</div>
					</section>
				</div>
			</div>
			<div class="AllSite">
				<div class="Content-Full">
					<div class="Content-Small">
						<section class="Section-Offers" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<div class="DropDown-Recrutement-Box">
								<div class="Postulator-Box">
									<a href="#!" class="Color-Purple CTA CTA-Offers">Postuler à l'offre</a>
								</div>
								<div class="RightWrapper">
									<div id="DropDown" class="DropDown DropDown-L DropDown-White">
										<h4 class="H5-DropDown Color-White" tabindex="0">Consultant(e) en stratégie digitale
											<span class="Add-L" tabindex="0">+</span>
											<span class="Less-L" tabindex="0">-</span>
										</h4>
										<div id="DropDown-Options" class="DropDown-Options-L MarginTop-25px" tabindex="0" >
											<p class="Color-White">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem ac iaculis lacinia. Quisque condimentum metus odio, ac molestie augue imperdiet at. Phasellus purus leo feugiat nec sagittis at posuere.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="DropDown-Recrutement-Box">
								<div class="Postulator-Box">
									<a href="#!" class="Color-Purple CTA CTA-Offers">Postuler à l'offre</a>
								</div>
								<div class="RightWrapper">
									<div id="DropDown" class="DropDown DropDown-L DropDown-White">
										<h4 class="H5-DropDown Color-White" tabindex="0">Consultant(e) Manager Transformation Digitale
											<span class="Add-L" tabindex="0">+</span>
											<span class="Less-L" tabindex="0">-</span>
										</h4>
										<div id="DropDown-Options" class="DropDown-Options-L MarginTop-25px" tabindex="0" >
											<p class="Color-White">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem ac iaculis lacinia. Quisque condimentum metus odio, ac molestie augue imperdiet at. Phasellus purus leo feugiat nec sagittis at posuere.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="DropDown-Recrutement-Box">
								<div class="Postulator-Box">
									<a href="#!" class="Color-Purple CTA CTA-Offers">Postuler à l'offre</a>
								</div>
								<div class="RightWrapper">
									<div id="DropDown" class="DropDown DropDown-L DropDown-White">
										<h4 class="H5-DropDown Color-White" tabindex="0">Consultant(e) Junior en Stratégie Marketing, CRM & Digitale
											<span class="Add-L" tabindex="0">+</span>
											<span class="Less-L" tabindex="0">-</span>
										</h4>
										<div id="DropDown-Options" class="DropDown-Options-L MarginTop-25px" tabindex="0" >
											<p class="Color-White">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem ac iaculis lacinia. Quisque condimentum metus odio, ac molestie augue imperdiet at. Phasellus purus leo feugiat nec sagittis at posuere.</p>
										</div>
									</div>
								</div>
							</div>

						</section>
					</div>
				</div>
			<!-- FOOTER -->
			<footer class="Section-Footer Section-Footer-Contact Content-Full">
				<div class="Content-small">
					<div class="Box-Footer-Social" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<a href="tel:+33 6 42 45 05 24" class="Footer-Link">+33 6 42 45 05 24</a>
						<div data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
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
								<a href="recrutement.php">Recrutement</a>
							</div>
							<span class="Footer-Link-Copyright">© 2021 Trailblazers</span>
						</div>
					</div>
				</div>
			</footer>
			</div>
			<!-- FOOTER -->
		</main>
		<?php require 'footer.php'; ?>
	</body>
