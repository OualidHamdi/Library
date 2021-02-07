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
        include('header.php');
      include('function/function.php');

      $ID = $_POST['delete_id'];
 
   $query_title= "SELECT title FROM books WHERE ID = '$ID'";
    $result=mysqli_query($connection, $query_title);
    $resultCheck = mysqli_num_rows($result);
  while($row = $result->fetch_assoc()) {
    $title = $row['title'];
    
  }
  
     ?>
        <div class=" main-container">
          <div class="container">
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                    <h5 class="title">DELETE « <?php echo $title ?> » :</h5>
                    </div>
              </form>
          
     
                       <!-- Modal -->

    <div class="modal-content">
          <div class="head">?</div>
   
      <div class="modal-body body">
        Etes-vous sûr de vouloir supprimer ce livre?
      </div>
      <div class="modal-footer" style="margin:auto;border:none;">
        
       <form action="function/delete.php" method="post">
        <input type="hidden" name="delete_id" value="<?php echo $ID; ?>">
        <button type="submit" class="btnStyle"  name="delete">YES</button>
       </form>
       
       <form action="books.php" method="post">
        <button type="submit" class="btnStyle" style="background:#683bd4;"data-dismiss="modal">NO</button>
       
       </form>
      </div>
    
        </div>
         </div> 
          <?php include('footer.php') ?>
        </div>
</body>
</html>