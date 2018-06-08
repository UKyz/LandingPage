<?php 

	function send_mail() {

		$mail = 'fqbg.victor@icloud.com'; // Déclaration de l'adresse de destination.
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
		//=====Déclaration des messages au format texte et au format HTML.
		//$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
		$message_txt = "Un nouveau message a été envoyé depuis votre CV en ligne par le contact : \"" . $_POST['name'] . "\" ( " . $_POST['email'] . "). Le message est le suivant : \"" . $_POST['message'] . "\"";


		//==========
		 
		//=====Création de la boundary
		$boundary = "-----=".md5(rand());
		//==========
		 
		//=====Définition du sujet.
		$sujet = "Nouveau message sur votre site";
		//=========
		 
		//=====Création du header de l'e-mail.
		$header = "From: <" . $_POST['email'] . ">".$passage_ligne;
		$header.= "Reply-to: <" . $_POST['email'] . ">".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		//==========

		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========
		 
		//=====Envoi de l'e-mail.
		mail($mail,utf8_decode($sujet),utf8_decode($message),$header);
		//==========
	}

	if (isset($_POST['email']) and isset($_POST['name']) and isset($_POST['message'])) {
		send_mail();
		echo "<script>alert(\"Votre message a bien été envoyé.\")</script>";
	}

?>

<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fqbg Victor CV</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main_3.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Bienvenue</a></li>
							<li><a href="#one">Qui suis-je</a></li>
							<li><a href="#two">Que fais-je</a></li>
							<li><a href="#three">Restons en contact</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Fauquembergue Victor</h1>
							<p>Voici mon CV en ligne, ici je me présente<br />
							et vous montre ce que fait et ce qui me passionne.</p>
							<ul class="actions">
								<li><a href="../English/" class="button">Switch in English</a></li>
								<li><a href="#one" class="button scrolly">En savoir plus</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="http://www.comedycentral.co.uk/sites/default/files/styles/image-w-520-h-520-scale/public/cc_uk/galleries/large/2016/06/16/chandle_computer_hat.gif?itok=wClYW-zH" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Motivé</h2>
									<p>Je suis motivé, je me remet constamment en question pour toujours évoluer. J'adore apprendre de nouvelles choses et acquérir de nouvelles compétences.</p>
									<ul class="actions">
										<li><a href="coverLetter.php" class="button">Voir ma lettre de motivation</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="https://media.giphy.com/media/raGUaRLQBPIk0/giphy.gif" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Sportif</h2>
									<p>Je suis sportif, le sport est mon loisir favoris. Je joue au football, en club, depuis mon plus jeune âge mais également à d'autres sports entre amis ou en famille. Je pense que c'est un atout d'avoir un esprit d'équipe pour travailler en entreprise.</p>
									<ul class="actions">
										<li><a href="coverLetter.php" class="button">Voir ma lettre de motivation</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="https://78.media.tumblr.com/cd3016785fed84d7ca8300da86adbb3b/tumblr_npimfjEgla1utllalo4_250.gif" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>À l'écoute</h2>
									<p>Je suis à l'écoute, que ce soit dans un projet, avec des clients ou entre amis, je suis à l'écoute des gens, de leurs probèmes, tout en essayant de leur proposer des solutions.</p>
									<ul class="actions">
										<li><a href="#" class="button">Voir mes différents projets</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Ce que je fais</h2>
							<p>Outre le sport, j'occupe mon temps libre de différentes façons. Je passe beaucoup de temps à coder, je suis également fan de série et j'adore tous ce qui est jeu vidéo et jeu de société. </p>
							<div class="features">
								<section>
									<span class="icon major fa-code"></span>
									<h3>Programmer</h3>
									<p>Je sais coder sur quelques langages différents tels que le C++, JAVA, HTML-CSS-PHP, Python, Qt, Android ...</p>
								</section>
								<section>
									<span class="icon major fa-unlock-alt"></span>
									<h3>Apprendre</h3>
									<p>Même si je ne maitrise pas quelque chose je suis toujours enthousiaste à l'idée d'apprendre et d'acquérir de nouvelles compétences.</p>
								</section>
								<section>
									<span class="icon major fa-globe"></span>
									<h3>Découvrir</h3>
									<p>J'ai eu la chance de découvrir et de vivre l'Irlande pendant un semestre. J'ai pu découvrir et m'integrer à une nouvelle culture, ainsi que perfectionner mon anglais.</p>
								</section>
								<section>
									<span class="icon major fa-play"></span>
									<h3>Divertir</h3>
									<p>Influencé par une forte culture geek, je suis fan de série, de jeux vidéos et jeux de sociétés. J'ai l'esprit de competition et motivé par l'envie de gagner chaque partie.</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="resume.php" class="button">En savoir plus</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style2-alt fade-up">
						<div class="inner">
							<h2>Restons en contact</h2>
							<p>Vous pouvez me contacter via n'importe quel moyen de communication, vous pouvez également m'envoyer un message directement depuis ce site avec les petites zones de texte ci-dessous. Si vous avez une question, une demande ou quoi que ce soit, n'hésitez pas.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="field half first">
											<label for="name">Nom</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="5"></textarea>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Envoyer</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Addresse</h3>
											<span>1 Avenue du Général Leclerc<br />
											Vitry-sur-Seine, 94400<br />
											France</span>
										</li>
										<li>
											<h3>Email</h3>
											<span>fqbg.victor@icloud.com</span>
										</li>
										<li>
											<h3>Téléphone</h3>
											<span>(+33) 6 70 77 76 33</span>
										</li>
										<li>
											<h3>Réseaux sociaux</h3>
											<ul class="icons">
												<li><a href="https://twitter.com/UKyzFR" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="https://www.facebook.com/victor.fauquembergue.52" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://github.com/UKyz" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="https://www.instagram.com/ukyzfr/" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="https://fr.linkedin.com/in/victor-fauquembergue-710253159" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Fauquembergue Victor. Tous droits reservés.</li><li>Switch in : <a href="../English/">English</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>