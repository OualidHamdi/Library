
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../function/boostrap.php') ?>
    <link rel="stylesheet" href="../style/style.css">
    <title>Library</title>
</head>
<body>
      
        <?php
     include('../function/db.php');
      include('header.php') ;
      require('../function/function.php');
     ?>
        <!--start of form to add books-->
       <div class=" main-container"> 
      <div class="container">
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                      <?php if(($_SESSION['language'])=="EN"):?>
            <h5 class="title">NEW BOOK :</h5>
            <?php else : ?>
                <h5 class="title">NOUVEAU LIVRE:</h5>
             <?php endif ?>
                   
                    </div>
              </form>
          
     
       
             
   <div class="row">
      <div class="offset-lg-2 col-lg-8 col-sm-12 col-12 border rounded main-section">
       <?php if(($_SESSION['language'])=="EN"):?>
            <form action="../function/create.php" method="post" enctype="multipart/form-data" class="container" id="needs-validation" novalidate>
          
               <div class="form-group">
                <label class="text-inverse" for="Title">Title</label>
                <input type="text" class="form-control" id="Title" name="Title" placeholder="Title" required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Author">Author</label>
                <input type="text" class="form-control" id="Author" name="Author" placeholder="Author" required>
              </div>

                 <div class="form-group">
                    <label class="text-inverse" for="image">Image</label><br>
                <label class="custom-file">

                  <input type="file" id="image" name="upd_img" class="form-control custom-file-input" style="padding: 0 300px;" required>
                  <span class="custom-file-control"></span>
                </label>
              </div> 
              <div class="form-group">
                <label class="text-inverse" for="Author">Price</label>
                <input type="text" class="form-control" id="Prix" name="Prix" placeholder="Price" required>
              </div>
              <div class="form-group">
                <label class="text-inverse" for="Author">Quantity in stock</label>
                <input type="text" class="form-control" id="Quantite" name="Quantite" placeholder="Quantity in stock" required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Publishedat">Published at</label>
                <input type="date" class="form-control" name="publishedat" id="Publishedat" placeholder="Published at" required>
              </div>
<div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <button class="bntStyle"  name="Add" type="submit">Add</button>
            </div>
          </div>
       
     
 </form>
            <?php else : ?>
               <form action="../function/create.php" method="post" enctype="multipart/form-data" class="container" id="needs-validation" novalidate>
          
               <div class="form-group">
                <label class="text-inverse" for="Title">Titre</label>
                <input type="text" class="form-control" id="Title" name="Title" placeholder="Titre" required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Author">Auteure</label>
                <input type="text" class="form-control" id="Author" name="Author" placeholder="Auteure" required>
              </div>

                 <div class="form-group">
                    <label class="text-inverse" for="image">Image</label><br>
                <label class="custom-file">

                  <input type="file" id="image" name="upd_img" class="form-control custom-file-input" style="padding: 0 300px;" required>
                  <span class="custom-file-control"></span>
                </label>
              </div> 
              <div class="form-group">
                <label class="text-inverse" for="Author">Prix</label>
                <input type="text" class="form-control" id="Prix" name="Prix" placeholder="Prix" required>
              </div>
              <div class="form-group">
                <label class="text-inverse" for="Author">Quantité au stock</label>
                <input type="text" class="form-control" id="Quantite" name="Quantite" placeholder="Quantité au stock" required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Publishedat">Publié à</label>
                <input type="date" class="form-control" name="publishedat" id="Publishedat" placeholder="Publié à" required>
              </div>
<div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <button class="bntStyle"  name="Add" type="submit">Ajouter</button>
            </div>
          </div>
       
     
 </form>
             <?php endif ?>
        
    </div>  
 </div>





 </div>
        <?php include('../footer.php') ?>
        </div>
</body>
</html>