  <?php
 include('db.php');
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">

    <title>Library</title>
</head>
<body>
        <?php
        include('header.php');
      include('function.php');

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

      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer" style="width: 67%;border:none;">
        
       <form action="delete.php" method="post">
          
          <input type="hidden" name="delete_id" value="<?php echo $ID; ?>">
          <button type="submit" class="btn btn-danger" name="delete">YES</button>
       </form>
       <form action="books.php" method="post">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">NO</button>
       </form>
      </div>
    
        </div>
         </div> 
          <?php include('footer.php') ?>
        </div>
</body>
</html>