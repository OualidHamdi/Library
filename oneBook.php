
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://localhost/library/onebook.php">
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

            if(isset($_POST['shearch'])){
              if (!empty($_POST['idBook'])){
                $ID = $_POST['idBook'];
                $query = "SELECT * FROM books WHERE ID ='$ID'  ORDER BY ID DESC";
                $query_run = mysqli_query($connection,$query);
              }else{
                $book = $_POST['book'];
                $query = "SELECT * FROM books WHERE title LIKE'$book%'  ORDER BY ID DESC";
                $query_run = mysqli_query($connection,$query);
              }
                ?>  <!--start of form to add books-->
       <div class=" main-container"> 
      <div class="container"><?php
                foreach ($query_run as $row ) {
            
        ?>

      
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                    <h5 class="title"><?php echo $row['title']; ?> :</h5>
                    </div>
              </form>
          
       

     <div class="row" style="margin-top: 36px;">
<div class="col-lg-6 col-md-8" style="margin-bottom: 40px;margin-top: 16px;">
  <div class="card">
    <div class="card-body lineheight" style="background: #f3f3f3;border-radius: 10px;padding: 20px;">
      <h5><span class="testStart">NAME : </span><?php echo $row['title']; ?></h5>
      <h5><span class="testStart">AUTHOR : </span><?php echo $row['auteur']; ?></h5>
      <h5><span class="testStart">PRIX : </span><?php echo $row['Prix']; ?> $</h5>
      <h5><span class="testStart">QUANTITE AU STOCK : </span><?php echo $row['QStock']; ?></h5>
      <h5><span class="testStart">DATE DE PUBLICATION : </span><?php echo $row['publishedat']; ?></h5>
    </div>
     </div>
  </div>
  <div class="col-lg-6 col-md-4" style="margin-bottom: 36px;">
  <div class="card">
    <?php echo '<img class="card-img-top" style="max-height: 319px;" src="upload/'.$row['image'].'">'?>
  </div>
 </div>
  </div>

      <?php
      }
      }else{
        echo "Aucun Enregistrement Trouvé";
      }
      ?>       
  





 </div>
        <?php include('footer.php') ?>
        </div>
</body>
</html>