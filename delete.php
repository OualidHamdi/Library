<?php
include('db.php');

		$id = $_POST['delete_id'];
		$query = "DELETE FROM books WHERE ID = '$id'";
		$query_run = mysqli_query($connection,$query);

		if($query_run)
		{
			$_SESSION['success'] =  "Suppression avec success";
			header('Location: books.php');
		}else
		{
			$_SESSION['status']= "La suppression n'a pas été effectuée";
			header('Location: books.php');
		}
	

?>