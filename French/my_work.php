<?php 

	if (isset($_GET['page'])) {
        if ($_GET['page'] == 'TPSevenWonders') {

            $html = "<h1 class=\"major\">Description</h1>
            		<h2>TPSevenWonders</h2>
					<div class=\"inner\" id=\"Description\">
						<div class=\"12u$\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot0.png\" /></span></div>
						<p>We had to implement a game based on Seven Wonders in node JS. This game is for two players, they'll fight against each other and try to be the best city. In fact you need to be the best city, but you can reach the goal in two different ways. You'll be able to win with science or also with strenght. Come on and try this game based on Seven Wonders.
						<br />Feel free to contribute or discuss the game.</p>
					</div>
					<h3>Install & Play</h3>
					<div class=\"row uniform\">
						<pre><code>git clone https://github.com/UKyz/TPSevenWondersJS.git
cd TPSevenWondersJS
yarn install
yarn start</code></pre>
					</div>
					<h3>Gameplay</h3>
					<div class=\"inner\">
						<p>The goal of the game is to win over the rival city. You will have, at your service, a city full of resources, units, scientists, wonders and also a divinity to believe in. As a master of the city, you will be able to do a lot of actions. First of all, you will need some units to defend the land, because the enemy can come over at every moment and attack your city. If they win, they will steal a lot of resources. Despite that you can also attack the rival whenever you want. <br />
 							Then you will need resources to operate, you will be able to buy, chop and sell resources. You will manage your stocks of gold, corn and wood. Gold will be usefull for everything, you will need corn to heal your units most of the time, and finally wood will be precious to build wonders and help your city to grow faster. <br />
 							Every city has a divinity, so that you will be having one too. You will need to be kind with your pray, because the divinity is a little bit capricious. By offering resources to the divinity, you will be able to receive some favors or blessings. This can be helpfull in the tough moments. <br />
 							And finally your city will have some clever guys. The scientists need some gold to be smarter, but the scientists can be the key of winning. Indeed you can win by science if your clever guys are high evolved.
						</p>
						<h4>The city</h4>
						<p>You will control a city, your city. You need to bring the city at the top to win the battle.
						</p>
						<h4>The divinity</h4>
						<p>You will have a divinity in your city, you will be able to offer resources to the divinity. Wait and see if the divinity blesses you in return. But be careful, the divinity is capricious.
						</p>
						<h4>The units</h4>
						<p>You will have, to defend your city, some units. There can be some hapinness birth or some tragedic death in the ranks of units. You will be able to form units and prepare them to fight for you.
						</p>
						<h4>The wonders</h4>
						<p>You will be able to build wonders to help you win the battle. Wonders are beautiful and also very helpful to grow faster the number of resources of your city.
						</p>
						<h4>The scientists</h4>
						<p>You will have some scientists in your ranks, try to offer them some gold to see if they can help you and your city to be gretter. 
						</p>
					</div>
					<h4>Screenshots</h4>
					<div class=\"row uniform\">
						<div class=\"6u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot1.png\" /></span></div>
						<div class=\"6u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot2.png\" /></span></div>
						<div class=\"4u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot3.png\" /></span></div>
						<div class=\"4u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot4.png\" /></span></div>
						<div class=\"4u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot5.png\" /></span></div>
						<div class=\"4u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot6.png\" /></span></div>
						<div class=\"4u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot7.png\" /></span></div>
						<div class=\"4u\"><span class=\"image fit\"><img src=\"../imagesGit/screenshot8.png\" /></span></div>
					</div>";

        } else if ($_GET['page'] == 'Smurf') {

        	$html = "<h1 class=\"major\">Description</h1>
            		<h2>Smurf-Hill</h2>
					<div class=\"row uniform\" id=\"Description\">
						<p>Voilà</p>
					</div>";

        } else if ($_GET['page'] == 'Princeton') {

        	$html = "<h1 class=\"major\">Description</h1>
            		<h2>Princeton-Plainsboro</h2>
					<div class=\"row uniform\" id=\"Description\">
						<p>Voilà</p>
					</div>";

        }
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
		<title>Mon Travail - Victor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/zoe2.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="resume.php" class="title">Fauquembergue Victor</a>
				<nav>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="resume.php">Curriculum Vitae</a></li>
						<li><a href="coverLetter.php">Lettre De Motivation</a></li>
						<li><a href="my_work.php" class="active">Mon Travail</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<section id="main" class="wrapper">
					<div class="inner">
						<h1 class="major">Mon travail</h1>
						<div class="grid row uniform">
							<figure class="effect-zoe 6u">
								<img src="../imagesGit/smurf1.jpeg" alt="Smurf-Hill"/>
								<figcaption>
									<h2><a href="?page=Smurf#Description"><span>Smurf Hill</span></a></h2>
									<p class="description">Un jeu en 2D de "Tower-Defense" basé sur les Schtroumpfs implémenté en Qt.</p>
								</figcaption>			
							</figure>
							<figure class="effect-zoe 6u">
								<img src="../imagesGit/princeton2.png" alt="Princeton Plainsboro"/>
								<figcaption>
									<h2><a href="?page=Princeton#Description"><span>Princeton</span></a></h2>
									<p class="description">Une application web PHP permettant de gérer une clinique. Gestion des docteurs, patients, réservations et l'intégralité des pages publiques.</p>
								</figcaption>			
							</figure>
							<figure class="effect-zoe 6u">
								<img src="../imagesGit/screenshot1.png" alt="TPSevenWonders" href="#?page=TPSevenWonders"/>
								<figcaption>
									<h2><a href="?page=TPSevenWonders#Description"><span>TPSevenWonders</span></a></h2>
									<p class="description">Un jeu implémenté en JS, basé sur le jeu Seven Wonders. Un duel avec face à face deux cités qui gérent leurs ressources, unités et divinités.</p>
								</figcaption>			
							</figure>
						</div>
						<?php echo $html; ?>
					</div>
				</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Fauquembergue Victor. Tous droits reservés.</li><li>Switch in : <a href="../English/my_work.php">English</a></li>
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

			<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>