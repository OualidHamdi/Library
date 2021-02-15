<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Library</title>
    <style type="text/css">
      .row{
        overflow: hidden;
      }
    </style>
</head>
<body>

    <?php 
    include('function/db.php');
    include('header.php');
     require('function/function.php');
      ?>
    <div class="colorBg"></div>
    <div class="bg ">
  <section id="funnnels">
  <div class="container">
    <div class="row padd">

      <div class="col-sm-15 text-center" style="height: 25em;">
        <?php if(($_SESSION['language'])=="EN"):?>
          <div class="wrapForm">
            <h1>READ<br> MORE<br> BOOKS</h1>
            <form action="oneBook.php" method="POST">
              <input type="text" name="book" placeholder="FIND YOUR BOOK HERE"><br>
            <input type="submit" class="bntStyle" style="padding: 7px 23px;" name="shearch" value="SEARCH">
            </form>
          </div> 
          <?php else : ?>
          <div class="wrapForm">
               <h1>LIRE <br> PLUS<br> DE LIVRES</h1>       
            <form action="oneBook.php" method="POST">
              <input type="text" name="book" placeholder="TROUVEZ VOTRE LIVRE ICI"><br>
            <input type="submit" class="bntStyle" style="padding: 7px 23px;" name="shearch" value="CHERCHER">
            </form>
          </div>

           <?php endif ?>

        <div class="clearfix"></div>
      </div>

    </div>
  </div>
</section>
  <section id="section2">
     <div class=" main-container"> 
      <div class="container">
          
                    <?php if(($_SESSION['language'])=="EN"):?>
      <h3 class="title" style="margin-bottom: 70px;text-align: center;">Our recent books :</h3>
      <?php else : ?>
          <h3 class="title" style="margin-bottom: 70px;text-align: center;">Nos livres récents :</h3>
            <?php endif ?>
     
       

<div class="card-deck">

    <?php 
       

    $query = "SELECT * FROM Books ORDER BY ID DESC LIMIT 3 ";
    $query_run = mysqli_query($connection,$query);
    
    if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
    
          ?>
          <div class="col-sm-4">
            <form action="oneBook.php" method="POST">
             
  <div class="card">
     <button type="submit" class="btnClear" name="shearch">
     <input type="hidden" name="idBook" value="<?php echo $row['ID']; ?>">
    <?php echo '<img class="card-img-top" src="upload/'.$row['image'].'">'?>
    <div class="card-body">
     <h5 class="card-title title"><?php echo $row['title']; ?></h5>
    </div>
      </button>
  </div>

   </form>
  </div>
  <?php
        }
      }else {
        echo "Aucun Enregistrement Trouvé";
      }
    ?>

</div>





 </div>
        <?php include('footer.php') ?>
        </div>
 </section>

        
        </div>
</body>
</html>