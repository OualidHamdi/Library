<?php
include('db.php');


$title = $_POST['title'];
$auteur = $_POST['auteur'];
$image = $_POST['image'];
$publishedat = $_POST['publishedat'];

$query = "insert into books (title,auteur,image,publishedat)
values ('$title','$auteur','$image','$publishedArt')";
$query_run = mysqli_query($connection, $query);

if($query_run){
$_SESSION['success'] = "Votre insertion a bien été effectuée";

header ('location: books.php');
}else{
$_SESSION['status'] = "Pardon!! Vuillez réessayer plus tard!";
header ('location: books.php');
}
	
?>