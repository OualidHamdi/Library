<?php
include('db.php');

if(isset($_POST['Add'])){

	$title = $_POST['Title'];
$auteur = $_POST['Author'];
$image = $_POST['image'];
$publishedat = $_POST['dateP'];

$query = "insert into books (title,auteur,image,publishedat)
values ('$title','$auteur','$image','$publishedArt')";
$query_run = mysqli_query($connection, $query);

if($query_run){
$_SESSION['success'] = "Vous avez bien ajouter!!";

header ('location: books.php');
}else{
$_SESSION['status'] = "Pardon!! Vuillez réessayer plus tard!";
header ('location: books.php');
}
}

?>