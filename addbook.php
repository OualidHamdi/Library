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
      include('header.php') ;
      require('function.php');
     ?>
        <!--start of form to add books-->
        <div class="header2">
            <form class="form-inline mb-3">
                <h3 class="title">LIST OF BOOKS :</h3>
            </form>
        </div>
        <div class="mrgn1">
        <div class="container">
            
        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" name="Title">
            </div>
            <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" class="form-control" name="Author">
            </div>
            <div class="input-group">
                <label for="inputGroupFile04">image</label>
                <input type="file" class="form-control" name="upd_img" >
               
              </div>
            <div class="form-group">
                <label for="Title">published at</label>
                <input type="text" class="form-control" name="publishedat">
            </div>
             <button type="submit" name="Add" class="btn btn-primary">Add</button>
         </form>
        </div>
        </div><br><br><br>
              <!--end of form to add books-->
               <?php include('footer.php') ?>
</body>
</html>