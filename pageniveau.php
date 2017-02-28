<!DOCTYPE HTML>
<?php 
	session_start();
?>
<html>
	<head>
		<title> Quelque chose </title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<?php 
		if ($_SESSION['Niveau']==0) {
			header ('Location: index.php');
		}
		elseif ($_SESSION['Niveau']==1) {
			header ('Location: Niveaux/Niveau1.php');
		}
		elseif ($_SESSION['Niveau']==2) {
			header ('Location: Niveaux/Niveau2.php');
		}
		elseif ($_SESSION['Niveau']==3) {
			header ( 'Location: Niveaux/Niveau3.php');
		}
		elseif ($_SESSION['Niveau']==4) {
			header ('Location: Niveaux/Niveau4.php');
		}
		elseif ($_SESSION['Niveau']==5) {
			header ( 'Location: Niveaux/Niveau5.php');
		}
		elseif ($_SESSION['Niveau']==6) {
			header ('Location: Niveaux/Niveau6.php');
		}
		elseif ($_SESSION['Niveau']==7) {
			header ( 'Location: Niveaux/Niveau7.php');
		}
		elseif ($_SESSION['Niveau']==8) {
			header ('Location: Niveaux/Niveau8.php');
		}
		elseif ($_SESSION['Niveau']==9) {
			header ( 'Location: Niveaux/Niveau9.php');
		}
		elseif ($_SESSION['Niveau']==10) {
			header ('Location: Niveaux/Niveau10.php');
		}
		elseif ($_SESSION['Niveau']==11) {
			header ( 'Location: Niveaux/Niveau11.php');
		}
		elseif ($_SESSION['Niveau']==12) {
			header ('Location: Niveaux/Niveau12.php');
		}
		elseif ($_SESSION['Niveau']==13) {
			header ( 'Location: Niveaux/Niveau13.php');
		}
		elseif ($_SESSION['Niveau']==14) {
			header ('Location: Niveaux/Niveau14.php');
		}
		elseif ($_SESSION['Niveau']==15) {
			header ( 'Location: Niveaux/Niveau15.php');
		}
		elseif ($_SESSION['Niveau']==16) {
			header ('Location: Niveaux/Niveau16.php');
		}
		elseif ($_SESSION['Niveau']==17) {
			header ( 'Location: Niveaux/Niveau17.php');
		}
		elseif ($_SESSION['Niveau']==18) {
			header ('Location: Niveaux/Niveau18.php');
		}
		elseif ($_SESSION['Niveau']==19) {
			header ( 'Location: Niveaux/Niveau19.php');
		}
		elseif ($_SESSION['Niveau']==20) {
			header ('Location: Niveaux/Niveau20.php');
		}
		elseif ($_SESSION['Niveau']==21) {
			header ( 'Location: Niveaux/Niveau21.php');
		}
		elseif ($_SESSION['Niveau']==22) {
			header ('Location: Niveaux/Niveau22.php');
		}
		elseif ($_SESSION['Niveau']==23) {
			header ( 'Location: Niveaux/Niveau23.php');
		}
		elseif ($_SESSION['Niveau']==24) {
			header ('Location: Niveaux/Niveau24.php');
		}
		?>
	</body>
</html>