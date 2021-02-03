
<?php

$serveur_name ="localhost";
	$db_username ="root";
	$db_password = "";
	$db_name="library";

	$connection = mysqli_connect($serveur_name,$db_username,$db_password);
	$connection -> set_charset("utf8");
	$dbconfig = mysqli_select_db($connection,$db_name);
    


	if (!$dbconfig) {
    die("La connexion a échoué: " . mysqli_connect_error()  . "<br/>" );
    
}

function close_bd()
{
    mysqli_close($dbconfig);
}


?>