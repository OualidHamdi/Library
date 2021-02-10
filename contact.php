
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Library</title>
</head>
<body>
      
        <?php
     include('function/db.php');
      include('header.php') ;
      require('function/function.php');
     ?>
        <!--start of form to add books-->
       <div class=" main-container"> 
      <div class="container">
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                    <h5 class="title">CONTACT US :</h5>
                    </div>
              </form>
          
     
       
             
   <form action="phpmailer/index.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="testStart">NAME</label>
      <input type="text" class="form-control" id="NameContact" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="testStart">EMAIL</label>
      <input type="email" class="form-control" id="EmailContact" name="email"placeholder="Email" required>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4 " class="testStart">MESSAGE</label>
      <textarea class="form-control" id="MessageContact" name="message" style=" resize :none;" rows="10"placeholder="Message" ></textarea required>
    </div>
  </div>


  <button type="submit" name="send" class="bntStyle" style="padding: 7px 23px;">SEND</button>
</form>





 </div>
        <?php include('footer.php') ?>
        </div>
</body>
</html>