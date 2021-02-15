<?php
include('db.php');

		$id = $_POST['delete_id'];
		$query = "DELETE FROM books WHERE ID = '$id'";
		$query_run = mysqli_query($connection,$query);

		if($query_run)
		{
			 if($_SESSION['language']=="EN"){
      		$_SESSION['success'] =  "Deletion successfully";
      		}else{
      			$_SESSION['success'] =  "Suppression avec succès";
      		}
			
			header('Location: ../Admin/books.php');
		}else
		{ if($_SESSION['language']=="EN"){
      		 $_SESSION['status']= "The deletion was not performed";
      		}else{
      			 $_SESSION['status']= "La suppression n'a pas été effectuée";
      		}
			
			header('Location: ../Admin/books.php');
		}
	

?>