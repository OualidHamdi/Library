<?php
 include('function/db.php');

    $query = "SELECT * FROM Books ORDER BY ID DESC";
    $query_run = mysqli_query($connection,$query);
    
  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">

        <title>LIBRARY</title>
        <style>
    
            
            th,td {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php
        include('header.php');
      include('function/function.php');
     ?> 
        <!--books table-->
       

        <div class=" main-container">
        <div class="container">
           
                <form class="form-inline mb-3" action="addbook.php" method="POST">
                    <div class="ilinetext">
                    <h5 class="title">LIST OF BOOKS :</h5>
                    <button type="submit" class="bntStyle">Add</button>
  
                    </div>
              </form>
                <div id="main" class="card card-body">

                    <table id="table">
                        <tr class="trBg">
                            <th width="300px">Title</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Published at</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>action</th>
                        </tr>
                        <?php
          include('function/read.php');
          ?>
                    </table>
                </div>
                <!--books table end-->
      </div>
 <?php include('footer.php') ?>
  </div>
    </body>

    </html>