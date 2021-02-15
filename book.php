
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
                  
                    <?php if(($_SESSION['language'])=="EN"):?>
              <h5 class="title">OUR BOOKS :</h5>
            <?php else : ?>
                 <h5 class="title">NOS LIVRES :</h5>
             <?php endif ?>
                    </div>
              </form>
          
     
       
             
   <div class="card-deck">

    <?php 
    

    $query = "SELECT * FROM Books ORDER BY ID DESC";
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
</body>
</html>