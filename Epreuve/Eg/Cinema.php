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
									<h2>Et si on revoyait quelque films ?</h2>									
									<p>Aller nous allons tester un peu ta mémoire ainsi que ton sens de l'observation... Tu va devoir retrouver le titre du film de cette série de 15 images, il s'agit uniquement de film que nous avons vu ensemble ! 15 bonnes réponses et tu gagnes le mot de passe pour le niveau suivant, 1 seule erreur et tu dois tout recommencer !</p>				
									<p>Bonne chance :-)</p>
									<form method="POST" action="Verifcine.php">										
										<span class="image left"><img src="../../images//films/star wars.jpg" alt="" /></span>
										<p><b><u>Film n°1:</u></b></p>
										<input type="radio" name="1" value="Star Trek"/>
											<label for="Star Trek">Star Trek</label>
										</br>
										<input type="radio" name="1" value="Hidalgo"/>
											<label for="Hidalgo">Hidalgo</label>
										</br>
										<input type="radio" name="1" value="Star Wars"/>
											<label for="Star Wars">Star Wars</label>
										</br>
										<input type="radio" name="1" value="La Momie"/>
											<label for="La Momie">La Momie</label>
										</br>
										<input type="radio" name="1" value="Le Retour de la Momie"/>
											<label for="Le Retour de la Momie">Le Retour de la Momie</label>
										</br>
										<span class="image right"><img src="../../images//films/seven.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°2:</u></b></p>
										<input type="radio" name="2" value="Hannibal Lecter"/>
											<label for="Hannibal Lecter">Hannibal Lecter</label>
										</br>
										<input type="radio" name="2" value="Usual Suspect"/>
											<label for="Usual Suspect">Usual Suspect</label>
										</br>
										<input type="radio" name="2" value="Fast & Furious"/>
											<label for="Fast & Furious">Fast & Furious</label>
										</br>
										<input type="radio" name="2" value="Seven"/>
											<label for="Seven">Seven</label>
										</br>
										<input type="radio" name="2" value="Les Ailes de l'Enfer"/>
											<label for="Les Ailes de l'Enfer">Les Ailes de l'Enfer</label>
										</br>
										<span class="image left"><img src="../../images//films/Noublie.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°3:</u></b></p>
										<input type="radio" name="3" value="Forest Gump"/>
											<label for="Forest Gump">Forest Gump</label>
										</br>
										<input type="radio" name="3" value="N'oublie Jamais"/>
											<label for="N'oublie Jamais">N'oublie Jamais</label>
										</br>
										<input type="radio" name="3" value="La Ligne Verte"/>
											<label for="La Ligne Verte">La Ligne Verte</label>
										</br>
										<input type="radio" name="3" value="L'étrange Histoire de Benjamin Button"/>
											<label for="L'étrange Histoire de Benjamin Button">L'étrange Histoire de Benjamin Button</label>
										</br>
										<input type="radio" name="3" value="Click"/>
											<label for="Click">Click</label>
										</br>
										<span class="image right"><img src="../../images//films/Gladiator.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°4:</u></b></p>
										<input type="radio" name="4" value="Gladiator"/>
											<label for="Gladiator">Gladiator</label>
										</br>
										<input type="radio" name="4" value="Kingdom Of Heaven"/>
											<label for="Kingdom Of Heaven">Kingdom Of Heaven</label>
										</br>
										<input type="radio" name="4" value="Zorro"/>
											<label for="Zorro">Zorro</label>
										</br>
										<input type="radio" name="4" vaSigneslue="Signes"/>
											<label for="Signes">Signes</label>
										</br>
										<input type="radio" name="4" value="Troi"/>
											<label for="Troi">Troi</label>
										</br>										
										<span class="image left"><img src="../../images//films/Retour Momie.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°5:</u></b></p>
										<input type="radio" name="5" value="La Momie"/>
											<label for="La Momie">La Momie</label>
										</br>
										<input type="radio" name="5" value="Benjmain Gates : Le Trésor des Templiers"/>
											<label for="Benjmain Gates : Le Trésor des Templiers">Benjmain Gates : Le Trésor des Templiers</label>
										</br>
										<input type="radio" name="5" value="Le Retour de la Momie"/>
											<label for="Le Retour de la Momie">Le Retour de la Momie</label>
										</br>
										<input type="radio" name="5" value="Benjamin Gates : le Livre des Secrets"/>
											<label for="Benjamin Gates : le Livre des Secrets">Benjamin Gates : le Livre des Secrets</label>
										</br>
										<input type="radio" name="5" value="La Momie 3 : la Tombe de l'Empereur Dragon"/>
											<label for="La Momie 3 : la Tombe de l'Empereur Dragon">La Momie 3 : la Tombe de l'Empereur Dragon</label>
										</br>
										<span class="image right"><img src="../../images//films/Retour vers le Futur 2.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°6:</u></b></p>
										<input type="radio" name="6" value="Star Trek"/>
											<label for="Star Trek">Star Trek</label>
										</br>
										<input type="radio" name="6" value="Minority Report"/>
											<label for="Minority Report">Minority Report</label>
										</br>
										<input type="radio" name="6" value="Retour vers le Futur"/>
											<label for="Retour vers le Futur">Retour vers le Futur</label>
										</br>
										<input type="radio" name="6" value="Terminator"/>
											<label for="Terminator">Terminator</label>
										</br>
										<input type="radio" name="6" value="Retour vers le Futur 2"/>
											<label for="Retour vers le Futur 2">Retour vers le Futur 2</label>
										</br>
										<span class="image left"><img src="../../images//films/Matrix.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°7:</u></b></p>
										<input type="radio" name="7" value="Matrix"/>
											<label for="Matrix">Matrix</label>
										</br>
										<input type="radio" name="7" value="Alice au Pays des Merveilles"/>
											<label for="Alice au Pays des Merveilles">Alice au Pays des Merveilles</label>
										</br>
										<input type="radio" name="7" value="Matrix Revolution"/>
											<label for="Matrix Revolution">Matrix Revolution</label>
										</br>
										<input type="radio" name="7" value="Docteur Patch"/>
											<label for="Docteur Patch">Docteur Patch</label>
										</br>
										<input type="radio" name="7" value="Matrix Reloaded"/>
											<label for="Matrix Reloaded">Matrix Reloaded</label>
										</br>
										<span class="image right"><img src="../../images//films/Kingdom.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°8:</u></b></p>
										<input type="radio" name="8" value="Troi"/>
											<label for="Troi">Troi</label>
										</br>
										<input type="radio" name="8" value="Alexandre"/>
											<label for="Alexandre">Alexandre</label>
										</br>
										<input type="radio" name="8" value="300"/>
											<label for="300">300</label>
										</br>
										<input type="radio" name="8" value="Kingdom Of Heaven"/>
											<label for="Kingdom Of Heaven">Kingdom Of Heaven</label>
										</br>
										<input type="radio" name="8" value="Gladiator"/>
											<label for="Gladiator">Gladiator</label>
										</br>
										<span class="image left"><img src="../../images//films/Click.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°9:</u></b></p>
										<input type="radio" name="9" value="Bruce tout Puissant"/>
											<label for="Bruce tout Puissant">Bruce tout Puissant</label>
										</br>
										<input type="radio" name="9" value="Click"/>
											<label for="Click">Click</label>
										</br>
										<input type="radio" name="9" value="Yesman"/>
											<label for="Yesman">Yesman</label>
										</br>
										<input type="radio" name="9" value="Evan tout Puissant"/>
											<label for="Evan tout Puissant">Evan tout Puissant</label>
										</br>
										<input type="radio" name="9" value="Ce que Veulent les Femmes"/>
											<label for="Ce que Veulent les Femmes">Ce que Veulent les Femmes</label>
										</br>
										<span class="image right"><img src="../../images//films/Minority Report.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°10:</u></b></p>
										<input type="radio" name="10" value="Time Out"/>
											<label for="Time Out">Time Out</label>
										</br>
										<input type="radio" name="10" value="Total Recall"/>
											<label for="Total Recall">Total Recall</label>
										</br>
										<input type="radio" name="10" value="Minority Report"/>
											<label for="Minority Report">Minority Report</label>
										</br>
										<input type="radio" name="10" value="60 secondes Chrono"/>
											<label for="60 secondes Chrono">60 secondes Chrono</label>
										</br>
										<input type="radio" name="10" value="James Bond"/>
											<label for="James Bond">James Bond</label>
										</br>
										<span class="image left"><img src="../../images//films/Patriot.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°11:</u></b></p>
										<input type="radio" name="11" value="The Patriot"/>
											<label for="The Patriot">The Patriot</label>
										</br>
										<input type="radio" name="11" value="La Petite Maison dans la Prairie"/>
											<label for="La Petite Maison dans la Prairie">La Petite Maison dans la Prairie</label>
										</br>
										<input type="radio" name="11" value="L'étrange Histoire de Benjamin Button"/>
											<label for="L'étrange Histoire de Benjamin Button">L'étrange Histoire de Benjamin Button</label>
										</br>
										<input type="radio" name="11" value="La Ligues des Gentlemans Extraordianires"/>
											<label for="La Ligues des Gentlemans Extraordianires">La Ligues des Gentlemans Extraordianires</label>
										</br>
										<input type="radio" name="11" value="American History X"/>
											<label for="American History X">American History X</label>
										</br>
										<span class="image right"><img src="../../images//films/Ocean.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°12:</u></b></p>
										<input type="radio" name="12" value="Ocean's Thirteen"/>
											<label for="Ocean's Thirteen">Ocean's Thirteen</label>
										</br>
										<input type="radio" name="12" value="Ah si j'étais riche !"/>
											<label for="Ah si j'étais riche !">Ah si j'étais riche !</label>
										</br>
										<input type="radio" name="12" value="Ocean's Twelve"/>
											<label for="Ocean's Twelve">Ocean's Twelve</label>
										</br>
										<input type="radio" name="12" value="James Bond : Casino Royal"/>
											<label for="James Bond : Casino Royal">James Bond : Casino Royal</label>
										</br>
										<input type="radio" name="12" value="Ocean's Eleven"/>
											<label for="Ocean's Eleven">Ocean's Eleven</label>
										</br>									
										<span class="image left"><img src="../../images//films/Wild Wild West.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°13:</u></b></p>
										<input type="radio" name="13" value="Il était une fois dans l'Ouest"/>
											<label for="Il était une fois dans l'Ouest">Il était une fois dans l'Ouest</label>
										</br>
										<input type="radio" name="13" value="Hidalgo"/>
											<label for="Hidalgo">Hidalgo</label>
										</br>
										<input type="radio" name="13" value="Retour vers le Futur 3"/>
											<label for="Retour vers le Futur 3">Retour vers le Futur 3</label>
										</br>
										<input type="radio" name="13" value="Wild Wild West"/>
											<label for="Wild Wild West">Wild Wild West</label>
										</br>
										<input type="radio" name="13" value="Orange Mécannique"/>
											<label for="Orange Mécannique">Orange Mécannique</label>
										</br>
										<span class="image right"><img src="../../images//films/Star Trek.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°14:</u></b></p>
										<input type="radio" name="14" value="Interstellar"/>
											<label for="Interstellar">Interstellar</label>
										</br>
										<input type="radio" name="14" value="Oblivion"/>
											<label for="Oblivion">Oblivion</label>
										</br>
										<input type="radio" name="14" value="Star Trek"/>
											<label for="Star Trek">Star Trek</label>
										</br>
										<input type="radio" name="14" value="Star Gate"/>
											<label for="Star Gate">Star Gate</label>
										</br>
										<input type="radio" name="14" value="Star Trek : Into the Darkness"/>
											<label for="Star Trek : Into the Darkness">Star Trek : Into the Darkness</label>
										</br>
										<span class="image left"><img src="../../images//films/Ligues.jpg" alt="" /></span>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<p><b><u>Film n°15:</u></b></p>
										<input type="radio" name="15" value="James Bond"/>
											<label for="James Bond">James Bond</label>
										</br>
										<input type="radio" name="15" value="Haute Voltige"/>
											<label for="Haute Voltige">Haute Voltige</label>
										</br>
										<input type="radio" name="15" value="La Ligues des Gentlemans Extraordinaires"/>
											<label for="La Ligues des Gentlemans Extraordinaires">La Ligues des Gentlemans Extraordinaires</label>
										</br>
										<input type="radio" name="15" value="La Momie"/>
											<label for="La Momie">La Momie</label>
										</br>
										<input type="radio" name="15" value="Autre..."/>
											<label for="Autre...">Autre...</label>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<input type="submit" class="form-button-submit button" value ="Valider !"/>
									</form>		
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