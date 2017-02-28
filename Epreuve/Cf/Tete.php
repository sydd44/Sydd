<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
		<div id="page-wrapper">
			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div id="content">
							<!-- Post -->
								<article class="box post">
									<span class="image left"><img src="../../images/atr.jpg" alt="" /></span>
									<h2>Un nouveau regard ?</h2>									
									<p>Aujourd'hui tu va devoir faire l'équilibre, pendant... 20 secondes :D Si tu n'y arrives pas, soit patiente et persévère !</p>
									<?php 
										$day = date("d");
										$mounth = date("m");
										$year = date("Y");
										if ($year>=2016 AND $mounth>=11) {
											echo 'Au cas où tu n\'aurais toujours pas réussi, tu as à présent le droit de t\'aider d\'un mur ! Mais dans ce cas tu dois tenir au moins 1 minute et 20 secondes :P';
										}
									?>							
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