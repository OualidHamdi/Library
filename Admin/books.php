<?php
 include('../function/db.php');

   if(!isset($_SESSION['first_name'])&& !isset($_SESSION['last_name'])){
     header ('Location: ../home.php');
 }

    $query = "SELECT * FROM Books ORDER BY ID DESC";
    $query_run = mysqli_query($connection,$query);
    
  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php include('../function/boostrap.php') ?>
    <link rel="stylesheet" href="../style/style.css">

        <title>LIBRARY</title>
        <style>
    
            
            th,td {
                text-align: center;
            }

            /*
  Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
  */
  @media
    only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr {
      display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr {
      margin: 0 0 1rem 0;
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
    td {
      /* Behave  like a "row" */
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
    }

    td:before {
      /* Now like a table header */
      position: absolute;
      /* Top/left values mimic padding */
      top: 0;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
      font-weight: bold;
    }

    /*
    Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
    */

    <?php if(($_SESSION['language'])=="EN"):?>
    td:nth-of-type(1):before { content: "Title"; }
    td:nth-of-type(2):before { content: "Author"; }
    td:nth-of-type(3):before { content: "Image"; }
    td:nth-of-type(4):before { content: "Published at"; }
    td:nth-of-type(5):before { content: "Price"; }
    td:nth-of-type(6):before { content: "Quantity"; }
    td:nth-of-type(7):before { content: "action"; }
            <?php else : ?>
    td:nth-of-type(1):before { content: "Title"; }
    td:nth-of-type(2):before { content: "Author"; }
    td:nth-of-type(3):before { content: "Image"; }
    td:nth-of-type(4):before { content: "Published at"; }
    td:nth-of-type(5):before { content: "Price"; }
    td:nth-of-type(6):before { content: "Quantity"; }
    td:nth-of-type(7):before { content: "action"; }
             <?php endif ?>
 
    

  }
        </style>
    </head>

    <body>
        <?php
              include('header.php') ;
               include('../function/function.php');
     ?> 
        <!--books table-->
       

        <div class=" main-container">
        <div class="container">
           
                <form class="form-inline mb-3" action="addbook.php" method="POST">
                    <div class="ilinetext">
                      <?php if(($_SESSION['language'])=="EN"):?>
            <h5 class="title">LIST OF BOOKS :</h5>
                    <button type="submit" class="bntStyle">Add Book</button>
            <?php else : ?>
               <h5 class="title">LISTE DES LIVRES :</h5>
                    <button type="submit" class="bntStyle">Ajouter un livre</button>
             <?php endif ?>
                    
  
                    </div>
              </form>
                <div id="main" class="card card-body">

<table role="table" id="table">
  <thead role="rowgroup">
    <tr role="row" class="trBg">
      <?php if(($_SESSION['language'])=="EN"):?>
      <th role="columnheader">Title</th>
      <th role="columnheader">Author</th>
      <th role="columnheader">Image</th>
      <th role="columnheader">Published at</th>
      <th role="columnheader">Price</th>
      <th role="columnheader">Quantity</th>
      <th role="columnheader">Action</th>
      <?php else : ?>
         <th role="columnheader">Titre</th>
      <th role="columnheader">Auteure</th>
      <th role="columnheader">Image</th>
      <th role="columnheader">Publié à</th>
      <th role="columnheader">Prix</th>
      <th role="columnheader">Quantité</th>
      <th role="columnheader">Action</th>
             <?php endif ?>
                          

    </tr>
  </thead>

                        <?php
          include('../function/read.php');
          ?>
                    </table>
                </div>
                <!--books table end-->
      </div>
 <?php include('../footer.php') ?>
  </div>
    </body>

    </html>