<?php
include('db.php');


if(isset($_POST['Update']))
{
    
$id = $_POST['edit_id'];
$title = $_POST['title'];
$auteur = $_POST['auteur'];
$image = $_POST['image'];
$publishedat = $_POST['publishedat'];

    $query = " UPDATE books SET title = '$title' , auteur ='$auteur', image = '$image',publishedat='$publishedat' WHERE ID = '$id'";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Votre modification a été bien effectuée";
        header('Location: books.php');
    }else
    {
        $_SESSION['status']= "Votre modification n'as pas été effectuée";
        header('Location: books.php');
    }
}
?>