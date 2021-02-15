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
    include('header.php') ?>
    
<div class=" main-container">
    <section id="funnnels">
  <div class="container">
    <div class="row padd">

      <div class="col-sm-15 text-center">
          <div class="wrap">
             <?php if(($_SESSION['language'])=="EN"):?>
            <h3>WELCOME TO LIBRARY</h3>
            <?php else : ?>
               <h3>BIENVENUE À LA BIBLIOTHÈQUE</h3>
             <?php endif ?>
          </div>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
</section>


        <?php include('footer.php') ?>
        </div>
</body>
</html>