<?php

include('db.php');


$title = addslashes($_POST['Title']);
$auteur = addslashes($_POST['Author']);
$publishedat = $_POST['publishedat'];
$prix = $_POST['Prix'];
$quantite = $_POST['Quantite'];
$image = addslashes($_FILES["upd_img"]['name']);


if($title=="" || $auteur=="" || $publishedat=="" || $image=="" ||  $prix=="" || $quantite=="" ){
 if($_SESSION['language']=="EN"){
             $_SESSION['status']= "Sorry!! Please complete all fields!";
            }else{
                $_SESSION['status'] = "Pardon!! Veuillez remplire tous les champs!";
            }

header ('location: ../Admin/addbook.php');
return;
}

$query = "insert into books (title,auteur,image,publishedat,Prix,QStock)
values ('$title','$auteur','$image','$publishedat','$prix','$quantite')";
$query_run = mysqli_query($connection, $query);

	if($query_run){
move_uploaded_file($_FILES["upd_img"]["tmp_name"], "../upload/".$_FILES["upd_img"]["name"]);
 if($_SESSION['language']=="EN"){
      		$_SESSION['success'] = "Your insertion was successful";
      		}else{
      			 $_SESSION['success'] = "Votre insertion a bien été effectuée";
      		}

header ('location: ../Admin/books.php');
}else{
	 if($_SESSION['language']=="EN"){
      		$_SESSION['status'] = "Sorry!! Please try again later!";
      		}else{
      			$_SESSION['status'] = "Pardon!! Veuillez réessayer plus tard!";
      		}

header ('location: ../Admin/addbook.php');

}
	
?>