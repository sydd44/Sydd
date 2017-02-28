<!DOCTYPE HTML>
<?php 
	session_start();
?>
<html>
	<head>
		<title>Ton Site</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<?php
			$day = date("d");
			$mounth = date("m");
			$year = date("Y");

			if($year<=2016) {
				if ($mounth<=12) {
					if($day<=22) {
						header('Location:../troptot.php');
					}
				}
			}
		?>
		<div id="page-wrapper">
			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div id="content">
							<!-- Post -->
								<article class="box post">
									<span class="image left"><img src="../../images/idee.jpg" alt="" /></span>
									<h2>Un petit coup de main ?</h2>									
									<p>Alors pour t'aider sans te donner la réponse je dirais simplement que le tout est un endroit où nous avons été plusieurs fois... Enfin, avant !</p>
									<p>Normalement avec ça tu devrais déjà avoir la réponse :D</p>
									<p>Ps : Au faite le mot de passe... C'est l'inverse de mon chiffre préféré !</p>
								</article>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<form method="post" action="../../pageniveau.php">
										<div class="row 50%">
											<div class="12u">
												<input type="submit" class="form-button-submit button" value ="Revenir à la page initiale."/>
											</div>
										</div>
									</form>
								</section>
							</div>	
						</div>
					</div>
				</div>
		</div>

		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/skel-viewport.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../../assets/js/main.js"></script>

	</body>
</html>