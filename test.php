<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
session_start();
/*echo $_SESSION['Niveau'];
echo $_COOKIE["Niveau"];
*/
echo $_SESSION['Niveau'];
setcookie("Niveau",0,time()+10);
echo $_COOKIE["Niveau"];

?>