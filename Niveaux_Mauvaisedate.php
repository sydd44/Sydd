<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
	session_start();
	$_POST['Pseudo'] = $_SESSION['Pseudo'];
	$_POST['MotdePasse'] = $_SESSION['MotdePasse'];
?>
<html>
	<head>
		<title>Ton Site</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
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
									<span class="image left"><img src="images/calendrier.jpg" alt="" /></span>
									<h2>Désolé mais...</h2>
									<?php
										$jour = array(
											"",
											"Lundi",
											"Mardi",
											"Mercredi",
											"Jeudi",
											"Vendredi",
											"Samedi",
											"Dimanche");

										$mois = array(
											"",
											"Janvier",
											"Février",
											"Mars",
											"Avril",
											"Mai",
											"Juin",
											"Juillet",
											"Août",
											"Septembre",
											"Octobre",
											"Novembre",
											"Décembre");

										$day = date("d");
										$mounth = date("m");
										$year = date("Y");

										if ($_POST['Pseudo']=="melissa") {
											if ($_POST['MotdePasse']=="31121997") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "Tout est bon ! Cependant il est un peu trop tôt, tu dois attendre le : </br>".$datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "Tout est bon ! Cependant il est un peu trop tôt, tu dois attendre le : </br>".$datefr;
												}
											}
											else {
												echo '1 Bon pseudo mais... Mauvais mot de Passe :S';
											} 
									    } 
										elseif ($_POST['Pseudo']=="alma") {
											if ($_POST['MotdePasse']=="126") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "2 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "2 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="bob") {
											if ($_POST['MotdePasse']=="54") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "3 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "3 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="curry") {
											if ($_POST['MotdePasse']=="456") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "4 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "4 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau5") {
											if ($_POST['MotdePasse']=="Niveau5") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "5 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "5 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="amorino") {
											if ($_POST['MotdePasse']=="10") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "6 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "6 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau7") {
											if ($_POST['MotdePasse']=="Niveau7") {
												if ($year>=2015) {
													if ($mounth>=07) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "7 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "7 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau8") {
											if ($_POST['MotdePasse']=="Niveau8") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "8 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "8 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau9") {
											if ($_POST['MotdePasse']=="Niveau9") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "9 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "9 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau10") {
											if ($_POST['MotdePasse']=="Niveau10") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "10 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "10 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau11") {
											if ($_POST['MotdePasse']=="Niveau11") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "11 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "11 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    }
									    elseif ($_POST['Pseudo']=="Niveau12") {
											if ($_POST['MotdePasse']=="Niveau12") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "12 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "12 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										}  
										elseif ($_POST['Pseudo']=="Niveau13") {
											if ($_POST['MotdePasse']=="Niveau13") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "13 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "13 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau14") {
											if ($_POST['MotdePasse']=="Niveau14") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "14 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "14 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau15") {
											if ($_POST['MotdePasse']=="Niveau15") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "15 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "15 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau16") {
											if ($_POST['MotdePasse']=="Niveau16") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "16 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "16 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau17") {
											if ($_POST['MotdePasse']=="Niveau17") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "17 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "17 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau18") {
											if ($_POST['MotdePasse']=="Niveau18") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "18 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "18 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau19") {
											if ($_POST['MotdePasse']=="Niveau19") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "19 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "19 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau20") {
											if ($_POST['MotdePasse']=="Niveau20") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "20 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "20 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau21") {
											if ($_POST['MotdePasse']=="Niveau21") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "21 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "21 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau22") {
											if ($_POST['MotdePasse']=="Niveau22") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "22 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "22 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										elseif ($_POST['Pseudo']=="Niveau23") {
											if ($_POST['MotdePasse']=="Niveau23") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "23 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "23 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
										} 
										elseif ($_POST['Pseudo']=="Niveau24") {
											if ($_POST['MotdePasse']=="Niveau24") {
												if ($year>=2015) {
													if ($mounth>=10) {
														header('Location: index.php');
													}
													else {
														$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
														echo "24 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
														echo $datefr;
													}
												}
												else {
													$datefr = $jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
													echo "1 Les identifiants sont bons :-) Malheureusement il est encore trop tôt, tu dois attendre le ";
													echo $datefr;
												}
											}
											else {
												echo "24 Bon pseudo mais... Mauvais mot de Passe :S";
											} 
									    } 
										else {
										 	echo "Ouch... Mauvais pseudo :S";
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
									<form method="post" action="pageniveau.php">
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>