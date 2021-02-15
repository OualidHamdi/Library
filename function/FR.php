<?php
	session_start();
	$_SESSION['language']="FR";
	header ('location: ../index.php');
?>