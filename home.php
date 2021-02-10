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
    <?php include('header.php');
     require('function/function.php');
      ?>
    <div class="colorBg"></div>
    <div class="bg ">
  <section id="funnnels">
  <div class="container">
    <div class="row padd">

      <div class="col-sm-15 text-center" style="height: 25em;">
          <div class="wrapForm">
            <h1>READ<br> MORE<br> BOOKS</h1>
            <form action="oneBook.php" method="POST">
              <input type="text" name="book" placeholder="FIND YOUR BOOK HERE"><br>
            <input type="submit" class="bntStyle" style="padding: 7px 23px;" name="shearch" value="SEARSH">
            </form>
          </div>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
</section>
  <section id="section2">
     <div class=" main-container"> 
      <div class="container">
          
                   
      <h3 class="title" style="margin-bottom: 70px;text-align: center;">Our recent books :</h3>
          
          
     
       

<div class="card-deck">

    <?php 
       include('function/db.php');
        function clean($string) {
   $string = str_replace(' ', '-', $string); 

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

    $query = "SELECT * FROM Books ORDER BY ID DESC LIMIT 3 ";
    $query_run = mysqli_query($connection,$query);
    
    if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          $link = clean($row['title']);
          ?>
          <div class="col-sm-4">
            <form action="oneBook.php/<?php echo $link; ?>" method="POST">
             
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