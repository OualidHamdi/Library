  <?php
 include('db.php');
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="style/addbooks.css">

    <title>Library</title>
</head>
<body>
        <?php
        include('header.php');
      include('function.php');

      $ID = $_POST['delete_id'];
     ?>
       
        <div class="header2">
            <form class="form-inline mb-3">
                <h3 class="title">DELETE BOOK :</h3>
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
        
</body>
</html>