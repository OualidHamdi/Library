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

              include('../header.php') ;
      include('../function/function.php');
     ?>
     <div class=" main-container">
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header title text-center">Login Panel Admin</h5><br>
            <div class="card-body">
                <form  action="../function/login.php" role="form" data-toggle="validator" method="POST" >


<!--                     <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" data-error="You must have a name." id="inputName" placeholder="Name"
type="text" required />

                       
                        <div class="help-block with-errors"></div>
                    </div>
 -->
<!--                     <div class="form-group">
                        <label>Username</label>
                        <input class="form-control item" type="text" name="username" maxlength="10" minlength="3"
pattern="^[a-zA-Z0-9_.-]*$" id="inputUsername" placeholder="Username" required>
                        <div class="help-block with-errors"></div>
                    </div> -->

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>

                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>


                    <div class="form-group">
                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="inputPassword"
data-error="Veuillez renseigner ce champ." placeholder="Password" required />

                            <!-- Error -->
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

       <!--              <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputConfirmPassword"
data-match="#inputPassword" data-match-error="Password don't match"
placeholder="Confirm" required />

                         
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> -->


<!--                     <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" data-error="Please enter message." id="inputMessage"
placeholder="Message" required=""></textarea>

         
                        <div class="help-block with-errors"></div>
                    </div> -->


                    <div class="form-group">
                        <button class="bntStyle" name="login_btn" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <?php include('../footer.php') ?>
        </div>
</body>

</html>