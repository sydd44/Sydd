<!DOCTYPE HTML>
<?php 
	session_start();
	if (isset($_POST['Pseudo']) AND !empty($_POST['Pseudo'])) {
		$_SESSION['Pseudo'] = $_POST['Pseudo'];
	}
	if (isset($_POST['MotdePasse']) AND !empty($_POST['MotdePasse'])) {
		$_SESSION['MotdePasse'] = $_POST['MotdePasse'];
	}	
?>
<html>
	<head>
		<title> Quelque chose </title>
		<meta charset="utf-8">
	</head>	
	<body>
		<?php
			
			$day = date("d");
			$mounth = date("m");
			$year = date("Y");

			/* Il y a une structure "type" qui se répète à savoir: 
			if ($_POST['Pseudo']=="Niveau1") { 				//test pseudo
				if ($_POST['MotdePasse']=="Niveau1") {		//test mdp
					if ($year>=2015) {						//test année
						if ($mounth>=10) {					//test mois
							header('Location: index.php');	//Si tout est ok, on renvoie à cette page.
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');			//S'il est trop tôt on affiche un massage d'erreur avec la date à laquelle cela sera bon via cette page.
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');						//même chose !
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php'); //En cas de mauvais mdp on renvoie à cette page.
				} 
		    } 
			esleif... 										//Ensuite si rien n'est bon pour le niveau 1 on passe au niveau 2, etc... Si le niveau 24 n'est pas bons on renvoie un message d'erreur.

			*/
			if ($_SESSION['Niveau']==0) {
				if ($_POST['Pseudo']=="melissa") {
					if ($_POST['MotdePasse']=="31121997") {
						if ($year==2015) {
							if ($mounth>=07) {
								$_SESSION['Niveau'] = 1;
								header('Location: Niveaux/Niveau1.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							$_SESSION['Niveau'] = 1;
							header('Location: Niveaux/Niveau1.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaismdp.php');
					} 
		    	}
		    	else {
	    			header('Location: Niveaux_Mauvaispseudo.php');
	    		}
	    	}	 
			if ($_SESSION['Niveau']==1) {
				if ($_POST['Pseudo']=="alma") {
					if ($_POST['MotdePasse']=="126") {
						if ($year==2015) {
							if ($mounth>=07) {
								$_SESSION['Niveau'] = 2;
								header('Location: Niveaux/Niveau2.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							$_SESSION['Niveau'] = 2;
							header('Location: Niveaux/Niveau2.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaismdp.php');
					} 
		    	}
		    	else {
		    		header('Location: Niveaux_Mauvaispseudo.php');
		    	}
			}
			elseif ($_SESSION['Niveau']==2) {
				if ($_POST['Pseudo']=="bob") {
					if ($_POST['MotdePasse']=="54") {
						if ($year==2015) {
							if ($mounth>=07) {
								$_SESSION['Niveau'] = 3;
								header('Location: Niveaux/Niveau3.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							$_SESSION['Niveau'] = 3;
							header('Location: Niveaux/Niveau3.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaismdp.php');
					} 
		    	}
		    	else {
		    		header('Location: Niveaux_Mauvaispseudo.php');
		    	}
			}
			elseif ($_SESSION['Niveau']==3) {
				if ($_POST['Pseudo']=="curry") {
					if ($_POST['MotdePasse']=="2468") {
						if ($year==2015) {
							if ($mounth>=07) {
								$_SESSION['Niveau'] = 4;
								header('Location: Niveaux/Niveau4.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							$_SESSION['Niveau'] = 4;
							header('Location: Niveaux/Niveau4.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaismdp.php');
					} 
		    	}
		    	else {
		    		header('Location: Niveaux_Mauvaispseudo.php');
		    	}
			}
			elseif ($_SESSION['Niveau']==4) {
				if ($_POST['Pseudo']=="restaurant") {
					if ($_POST['MotdePasse']=="142857") {
						if ($year==2015) {
							if ($mounth>=07) {
								$_SESSION['Niveau'] = 5;
								header('Location: Niveaux/Niveau5.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							$_SESSION['Niveau'] = 5;
							header('Location: Niveaux/Niveau5.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaismdp.php');
					} 
		    	}
		    	else {
		    		header('Location: Niveaux_Mauvaispseudo.php');
		    	}
			}
		?>
	</body>
</html>