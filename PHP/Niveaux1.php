<!DOCTYPE HTML>
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
			esleif... 										//Ensuite si rien n'est obn pour le niveau 1 on passe au niveau 2, etc... Si le niveau 24 n'est pas bons on renvoie un pessage d'erreur.

			*/

			if ($_POST['Pseudo']=="Niveau1") {
				if ($_POST['MotdePasse']=="Niveau1") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {							
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau2") {
				if ($_POST['MotdePasse']=="Niveau2") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau3") {
				if ($_POST['MotdePasse']=="Niveau3") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau4") {
				if ($_POST['MotdePasse']=="Niveau4") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau5") {
				if ($_POST['MotdePasse']=="Niveau5") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau6") {
				if ($_POST['MotdePasse']=="Niveau6") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau7") {
				if ($_POST['MotdePasse']=="Niveau7") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau8") {
				if ($_POST['MotdePasse']=="Niveau8") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau9") {
				if ($_POST['MotdePasse']=="Niveau9") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau10") {
				if ($_POST['MotdePasse']=="Niveau10") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau11") {
				if ($_POST['MotdePasse']=="Niveau11") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    }
		    elseif ($_POST['Pseudo']=="Niveau12") {
				if ($_POST['MotdePasse']=="Niveau12") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			}  
			elseif ($_POST['Pseudo']=="Niveau13") {
				if ($_POST['MotdePasse']=="Niveau13") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau14") {
				if ($_POST['MotdePasse']=="Niveau14") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau15") {
				if ($_POST['MotdePasse']=="Niveau15") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau16") {
				if ($_POST['MotdePasse']=="Niveau16") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau17") {
				if ($_POST['MotdePasse']=="Niveau17") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau18") {
				if ($_POST['MotdePasse']=="Niveau18") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau19") {
				if ($_POST['MotdePasse']=="Niveau19") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
			} 
			elseif ($_POST['Pseudo']=="Niveau20") {
				if ($_POST['MotdePasse']=="Niveau20") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau21") {
				if ($_POST['MotdePasse']=="Niveau21") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau22") {
				if ($_POST['MotdePasse']=="Niveau22") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
		    } 
			elseif ($_POST['Pseudo']=="Niveau23") {
				if ($_POST['MotdePasse']=="Niveau23") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
					}
					else {
						header('Location: Niveaux_Mauvaisedate.php');
					}
				}
				else {
					header('Location: Niveaux_Mauvaismdp.php');
				} 
			} 
			elseif ($_POST['Pseudo']=="Niveau24") {
				if ($_POST['MotdePasse']=="Niveau24") {
					if ($year>=2015) {
						if ($mounth>=10) {
							header('Location: index.php');
						}
						else {
							header('Location: Niveaux_Mauvaisedate.php');
						}
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
		?>
	</body>
</html>