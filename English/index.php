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
		echo "<script>alert(\"Your message has been succesfully send.\")</script>";
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
		<title>Victor Resume</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main_3.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Who we are</a></li>
							<li><a href="#two">What we do</a></li>
							<li><a href="#three">Get in touch</a></li>
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
							<p>Here it is my landing page, here I present myself<br />
							and show you what I like and what I like to do.</p>
							<ul class="actions">
								<li><a href="../French/" class="button">Passer en Français</a></li>
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="http://www.comedycentral.co.uk/sites/default/files/styles/image-w-520-h-520-scale/public/cc_uk/galleries/large/2016/06/16/chandle_computer_hat.gif?itok=wClYW-zH" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Motivated</h2>
									<p>I am motivated, I always ask myself and try to evolve. I love to learn new things, especially in informatics, and develop new skills.</p>
									<ul class="actions">
										<li><a href="#" class="button">See my cover letter</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="https://media.giphy.com/media/raGUaRLQBPIk0/giphy.gif" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Sportsman</h2>
									<p>I am sporty, sports is one of my favorite hobbies. I play football (soccer) since my childhood in a team, but I also play others sports with friends or familly. I think this a advantage to have that team spirit to work in company.</p>
									<ul class="actions">
										<li><a href="#" class="button">See my cover letter</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="https://78.media.tumblr.com/cd3016785fed84d7ca8300da86adbb3b/tumblr_npimfjEgla1utllalo4_250.gif" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Being attentive</h2>
									<p>Even if it is for a project, with clients or with friends and family, I am always being in tune with peoples. I hear their problems and I always try to propose some solutions to help them.</p>
									<ul class="actions">
										<li><a href="#" class="button">See my projects</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>What I do</h2>
							<p>Apart from sports, I lovet to code and this hobby is a big part from my free time. But I am also a big fan of series, board games and video games.</p>
							<div class="features">
								<section>
									<span class="icon major fa-code"></span>
									<h3>Programming</h3>
									<p>I know programmming in different languages as C++, JAVA, HTML-CSS-PHP, Python, Qt, Android ...</p>
								</section>
								<section>
									<span class="icon major fa-unlock-alt"></span>
									<h3>Learning</h3>
									<p>Even if I do not know something, I am always enthusiastic to learn something new and earn new skills.</p>
								</section>
								<section>
									<span class="icon major fa-globe"></span>
									<h3>Discovering</h3>
									<p>I had the chance to discover and live in Irland while a semester. I discover a new culture et I was glad to share this culture. And obviously, this semester help me to improuve my english.</p>
								</section>
								<section>
									<span class="icon major fa-play"></span>
									<h3>Diverting</h3>
									<p>Influenced by a strong geek culture, I am a big fan of series and games. I have the competition spirit and I always want to win every game that I play. </p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="#" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style2-alt fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>You can contact me by whatever means of communications, you can also send me a message directly by this page right under this. If you have any questions please don't be shy and ask me, I will respond.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="field half first">
											<label for="name">Name</label>
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
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>1 Avenue du Général Leclerc<br />
											Vitry-sur-Seine, 94400<br />
											France</span>
										</li>
										<li>
											<h3>Email</h3>
											<span>fqbg.victor@icloud.com</span>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(+33) 6 70 77 76 33</span>
										</li>
										<li>
											<h3>Socials Networks</h3>
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
						<li>&copy; Untitled. All rights reserved.</li><li>Changer pour : <a href="../French/">Français</a></li>
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