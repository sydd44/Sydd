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
		if ($_POST['1']=="Star Wars" AND $_POST['2']=="Seven" AND $_POST['3']=="N'oublie Jamais" AND $_POST['4']=="Gladiator" AND $_POST['5']=="Le Retour de la Momie" AND $_POST['6']=="Retour vers le Futur 2" AND $_POST['7']=="Matrix" AND $_POST['8']=="Kingdom Of Heaven" AND $_POST['9']=="Click" AND $_POST['10']=="Minority Report" AND $_POST['11']=="The Patriot" AND $_POST['12']=="Ocean's Eleven" AND $_POST['13']=="Wild Wild West" AND $_POST['14']=="Star Trek : Into the Darkness" AND $_POST['15']=="La Ligues des Gentlemans Extraordinaires") {
			header("Location: bravo.php");
		}
		else {
			header("Location: Cinema.php");
		}
		?>
	</body>
</html>