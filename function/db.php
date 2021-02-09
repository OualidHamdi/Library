<?php
session_start();
// //Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);



$serveur_name ="localhost";
	$db_username ="root";
	$db_password = "";
	$db_name="library";

	$connection = mysqli_connect($serveur_name,$db_username,$db_password);
	$connection -> set_charset("utf8");
	$dbconfig = mysqli_select_db($connection,$db_name);
    





	if (!$connection) {
    die("La connexion a échoué: " . mysqli_connect_error()  . "<br/>" );
    
}

function close_bd()
{
    mysqli_close($dbconfig);
}


?>