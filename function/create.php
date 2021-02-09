<?php

include('db.php');


$title = $_POST['Title'];
$auteur = $_POST['Author'];
$publishedat = $_POST['publishedat'];
$prix = $_POST['Prix'];
$quantite = $_POST['Quantite'];
$image = addslashes($_FILES["upd_img"]['name']);


if($title=="" || $auteur=="" || $publishedat=="" || $image=="" ||  $prix=="" || $quantite=="" ){
$_SESSION['status'] = "Pardon!! Veuillez remplire tous les champs!";
header ('location: ../addbook.php');
return;
}

$query = "insert into books (title,auteur,image,publishedat,Prix,QStock)
values ('$title','$auteur','$image','$publishedat','$prix','$quantite')";
$query_run = mysqli_query($connection, $query);

	if($query_run){
move_uploaded_file($_FILES["upd_img"]["tmp_name"], "../upload/".$_FILES["upd_img"]["name"]);

$_SESSION['success'] = "Votre insertion a bien été effectuée";

header ('location: ../books.php');
}else{
$_SESSION['status'] = "Pardon!! Veuillez réessayer plus tard!";
header ('location: ../addbook.php');

}
	
?>