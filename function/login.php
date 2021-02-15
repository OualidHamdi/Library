<?php
include('db.php');

if(isset($_POST['login_btn']))
	{
		$email_login = strtolower(trim($_POST['email']));	
		$password_login = addslashes(trim($_POST['password']));
		
	if(empty($email_login) || empty($password_login)){
		 if($_SESSION['language']=="EN"){
      		 $_SESSION['status']= "please complete all fields";
      		}else{
      					$_SESSION['status'] = "veuillez remplir tous les champs";
      		}

		header ('Location: ../Admin/login.php');
	}elseif(!filter_var($email_login,FILTER_VALIDATE_EMAIL)){
		if($_SESSION['language']=="EN"){
      		 $_SESSION['status']= "Please include '@' in your email, An '@' symbol is missing in '$ email_login'.";
      		}else{
      		$_SESSION['status'] = "Veuillez inclure '@' dans votre e-mail, Il manque un symbole '@' dans '$email_login' .";
      		}
		
		header ('Location: Location: ../Admin/login.php');
	}
	
		else{
			$query = "SELECT * FROM admin WHERE email = '$email_login' 
			AND password = '$password_login'";
		$query_run = mysqli_query($connection,$query);
		
		$usertypes = mysqli_fetch_array($query_run);
	
	
	 if (mysqli_num_rows($query_run)==1)
		{
			$_SESSION['first_name'] = $usertypes['first_name'] ;
			$_SESSION['last_name'] = $usertypes['last_name'] ;
		    $_SESSION['email'] = $usertypes['email'] ;
			$_SESSION['ID'] = $usertypes['ID'] ;
		 
			header ('Location: ../book.php');
		}
	
		else{
			 if($_SESSION['language']=="EN"){
      		 $_SESSION['status']= "The email address or password is incorrect";
      		}else{
      			$_SESSION['status'] = "L'adresse e-mail ou le mot de passe est incorrect";
      		}
			
			header ('Location: ../Admin/login.php');

		}
		}
		
	}

?>