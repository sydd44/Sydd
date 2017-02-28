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
				if ($_SESSION['Pseudo']=="melissa") {
					if ($_SESSION['MotdePasse']=="31121997") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",1,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 1;
								header('Location: Niveaux/Niveau1.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",1,time()+2*364*24*3600);
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
			elseif ($_SESSION['Niveau']==1) {
				if ($_SESSION['Pseudo']=="alma") {
					if ($_SESSION['MotdePasse']=="5812") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",2,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 2;
								header('Location: Niveaux/Niveau2.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",2,time()+2*364*24*3600);
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
				if ($_SESSION['Pseudo']=="bob") {
					if ($_SESSION['MotdePasse']=="54") {
						if ($year==2015) {
							if ($mounth>=07) {								
								setcookie("Niveau",3,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 3;
								header('Location: Niveaux/Niveau3.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",3,time()+2*364*24*3600);
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
				if ($_SESSION['Pseudo']=="curry") {
					if ($_SESSION['MotdePasse']=="2468") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",4,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 4;
								header('Location: Niveaux/Niveau4.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",4,time()+2*364*24*3600);
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
				if ($_SESSION['Pseudo']=="restaurant") {
					if ($_SESSION['MotdePasse']=="142857") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",5,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 5;
								header('Location: Niveaux/Niveau5.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",5,time()+2*364*24*3600);
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
			elseif ($_SESSION['Niveau']==5) {
				if ($_SESSION['Pseudo']=="amorino") {
					if ($_SESSION['MotdePasse']=="10") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",6,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 6;
								header('Location: Niveaux/Niveau6.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",6,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 6;
							header('Location: Niveaux/Niveau6.php');
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
			elseif ($_SESSION['Niveau']==6) {
				if ($_SESSION['Pseudo']=="cinema") {
					if ($_SESSION['MotdePasse']=="471") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",7,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 7;
								header('Location: Niveaux/Niveau7.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",7,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 7;
							header('Location: Niveaux/Niveau7.php');
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
			elseif ($_SESSION['Niveau']==7) {
				if ($_SESSION['Pseudo']=="liahona") {
					if ($_SESSION['MotdePasse']=="1407") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",8,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 8;
								header('Location: Niveaux/Niveau8.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",8,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 8;
							header('Location: Niveaux/Niveau8.php');
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
			elseif ($_SESSION['Niveau']==8) {
				if ($_SESSION['Pseudo']=="benjamin") {
					if ($_SESSION['MotdePasse']=="25") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",9,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 9;
								header('Location: Niveaux/Niveau9.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",9,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 9;
							header('Location: Niveaux/Niveau9.php');
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
			elseif ($_SESSION['Niveau']==9) {
				if ($_SESSION['Pseudo']=="consecration") {
					if ($_SESSION['MotdePasse']=="1729") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",10,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 10;
								header('Location: Niveaux/Niveau10.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",10,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 10;
							header('Location: Niveaux/Niveau10.php');
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
			elseif ($_SESSION['Niveau']==10) {
				if ($_SESSION['Pseudo']=="fibonacci") {
					if ($_SESSION['MotdePasse']=="177111") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",11,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 11;
								header('Location: Niveaux/Niveau11.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",11,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 11;
							header('Location: Niveaux/Niveau11.php');
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
			elseif ($_SESSION['Niveau']==11) {
				if ($_SESSION['Pseudo']=="chaire") {
					if ($_SESSION['MotdePasse']=="1004") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",12,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 12;
								header('Location: Niveaux/Niveau12.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",12,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 12;
							header('Location: Niveaux/Niveau12.php');
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
			elseif ($_SESSION['Niveau']==12) {
				if ($_SESSION['Pseudo']=="maite") {
					if ($_SESSION['MotdePasse']=="951357") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",13,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 13;
								header('Location: Niveaux/Niveau13.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",13,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 13;
							header('Location: Niveaux/Niveau13.php');
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
			elseif ($_SESSION['Niveau']==13) {
				if ($_SESSION['Pseudo']=="maite") {
					if ($_SESSION['MotdePasse']=="183562947") {
						if ($year==2015) {
							if ($mounth>=07) {
								setcookie("Niveau",14,time()+2*364*24*3600);
								$_SESSION['Niveau'] = 14;
								header('Location: Niveaux/Niveau14.php');
							}
							else {							
								header('Location: Niveaux_Mauvaisedate.php');
							}
						}
						elseif($year>=2015) {
							setcookie("Niveau",14,time()+2*364*24*3600);
							$_SESSION['Niveau'] = 14;
							header('Location: Niveaux/Niveau14.php');
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