<body class="Body-Dark" data-barba="wrapper">
	<?php require 'head.php'; ?>

	<main data-barba="Container" data-barba-namespace="home">
		<div id="ContactPointer">
			<div class="Pointer"></div>
		</div>
		<!-- HEADER -->
		<div class="Content-Full NoPointer">
			<div data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<img class="Logo" src="img/logo.svg">
			</div>
			<header class="Content">
				<?php require 'nav.php'; ?>
				<div class="Template-Head">
					<div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<img src="img/shapes/header-triangle-blue.svg">
						<div class="Template-Head-Box">
							<h6 class="MarginBottom-20px">Contact</h6>
							<h4>Besoin d’une expertise ? Dites nous tout sur votre besoin et faisons connaissance.</h4>
						</div>
					</div>
				</div>
			</header>
		</div>
		<?php require 'menu.php'; ?>
		<!-- HEADER -->
		<div class="Content Validation-Box">
			<a href="#!" class="Nav-Link Close Menu-Label Validation-Box-Close">Close</a>
			<div class="Validation-Content">
				<h2>Merci !</h2>
				<h5 class="MarginTop-10px">Votre demande a bien été envoyée</h5>
				<a href="index.php" class="Link-Main-Offers CTA Link-Main MarginTop-30px">
					Retour à l'accueil
				<img src="../img/a/arrow.svg" alt="Lien">
				</a>
			</div>
		</div>
		<div class="AllSite">
			<div class="Content-Full">
				<div class="Content-Small">
					<section class="Section-Formulaire">
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
								<label for="Subject">Objet de votre demande<span>*</span></label>
								<input type="text" id="Prénom" name="name" required  maxlength="200">
							</div>
							<div class="Input-Box Input-Box-Message" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
								<label for="Prénom">Message<span>*</span></label>
								<textarea name="Message" form="" maxlength="700"></textarea>
							</div>
							<div class="Button-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
								<p>Votre adresse de messagerie ne sera pas publiée.
									Les champs obligatoires sont indiqués avec un <span class="Color-Purple">*</span></p>
									<button type="submit" form="form1" value="Submit">
										<a href="#!" class="Button CTA CTA-Secondary">Envoyer<img src="../img/a/arrow.svg" alt="Lien"></a>
									</button>
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
							<a class="Box-Footer-Mailto-Link" href="contact.php">Nous écrire <img class="Box-Footer-Mailto-Arrow" src="img/a/arrow-footer.svg" alt="Continuer"></a>
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
		<?php require 'script.php'; ?>
	</body>
