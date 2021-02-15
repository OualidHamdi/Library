<?php
         include('../function/db.php');
  if(isset($_SESSION['first_name'])&& isset($_SESSION['last_name'])){
     header ('Location: ../home.php');
 }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library | Panel Admin </title>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
       <?php include('../function/boostrap.php') ?>
             <link rel="stylesheet" href="../style/style.css">
</head>

<body>

      <?php

              include('header.php') ;
      include('../function/function.php');
     ?>
     <div class=" main-container">
    <div class="container mt-5">
        <div class="card">
          <?php if(($_SESSION['language'])=="EN"):?>
            <h5 class="card-header title text-center">Login  | Panel Admin</h5>
            <?php else : ?>
               <h5 class="card-header title text-center">Connexion | Administrateur du panneau</h5>
             <?php endif ?>
            <br>
            <div class="card-body">
                <form  action="../function/login.php" role="form" data-toggle="validator" method="POST" >


                    <div class="form-group">
                        <label>Email</label>
                        <?php if(($_SESSION['language'])=="EN"):?>
                 <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Please complete this field."  required>
            <?php else : ?>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Veuillez renseigner ce champ."  required>
             <?php endif ?>
                 

                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>
<?php if(($_SESSION['language'])=="EN"):?>
     <div class="form-group">
                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="inputPassword"
data-error="Please complete this field." placeholder="Password" required />

                            <!-- Error -->
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
            <?php else : ?>
     <div class="form-group">
                        <label>Mot de passe</label>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="inputPassword"
data-error="Veuillez renseigner ce champ." placeholder="Mot de passe" required />

                            <!-- Error -->
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
             <?php endif ?>
                
                    <div class="form-group"><?php if(($_SESSION['language'])=="EN"):?>
            <button class="bntStyle" name="login_btn" type="submit">Login</button>
            <?php else : ?>
             <button class="bntStyle" name="login_btn" type="submit">Connexion</button>
             <?php endif ?>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
     <?php include('../footer.php') ?>
        </div>
</body>

</html>