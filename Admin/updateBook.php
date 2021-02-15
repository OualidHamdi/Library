
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
      include('../function/function.php');
     ?>
        <!--start of form to add books-->
        <div class=" main-container">
       <div class="container">
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                      <?php if(($_SESSION['language'])=="EN"):?>
                  <h5 class="title">UPDATE BOOK :</h5>
            <?php else : ?>
             <h5 class="title">Modifier le livre :</h5>
             <?php endif ?>

                    </div>
              </form>


 
            <?php
            if (isset($_POST['edit_Book']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM books WHERE ID ='$id'";
                $query_run = mysqli_query($connection,$query);
                foreach ($query_run as $row ) {
                    ?>

  <div class="row">
      <div class="offset-lg-2 col-lg-8 col-sm-12 col-12 border rounded main-section">
       <?php if(($_SESSION['language'])=="EN"):?>
              <form action="../function/update.php" method="post" enctype="multipart/form-data" class="container" id="needs-validation" novalidate>
          
               <div class="form-group">
                <label class="text-inverse" for="Title">Title</label>
                <input type="text" class="form-control" id="Title" name="title" placeholder="Title"  value="<?php echo $row['title']; ?>"  required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Author">Author</label>
                <input type="text" class="form-control" id="Author" name="auteur" placeholder="Author"  value="<?php echo $row['auteur']; ?>" required>
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
                <input type="text" class="form-control" id="Prix" name="Prix" placeholder="Price"  value="<?php echo $row['Prix']; ?>"required>
              </div>
              <div class="form-group">
                <label class="text-inverse" for="Author">Quantity in stock</label>
                <input type="text" class="form-control"  id="Quantite" name="Quantite" placeholder="Quantity in stock" value="<?php echo $row['QStock']; ?>" required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Publishedat">Published at</label>
                <input type="date" class="form-control" name="publishedat" id="Publishedat" placeholder="Published at" value="<?php echo $row['publishedat']; ?>" required>
              </div>
<div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                <button class="bntStyle"  name="Update" type="submit">Update</button>
            </div>
          </div>
       
     
 </form>
            <?php else : ?>
                <form action="../function/update.php" method="post" enctype="multipart/form-data" class="container" id="needs-validation" novalidate>
          
               <div class="form-group">
                <label class="text-inverse" for="Title">Titre</label>
                <input type="text" class="form-control" id="Title" name="title" placeholder="Titre"  value="<?php echo $row['title']; ?>"  required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Author">Auteure</label>
                <input type="text" class="form-control" id="Author" name="auteur" placeholder="Auteure"  value="<?php echo $row['auteur']; ?>" required>
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
                <input type="text" class="form-control" id="Prix" name="Prix" placeholder="Prix"  value="<?php echo $row['Prix']; ?>"required>
              </div>
              <div class="form-group">
                <label class="text-inverse" for="Author">Quantité au stock</label>
                <input type="text" class="form-control"  id="Quantite" name="Quantite" placeholder="Quantité au stock" value="<?php echo $row['QStock']; ?>" required>
              </div>
               <div class="form-group">
                <label class="text-inverse" for="Publishedat">Publié àt</label>
                <input type="date" class="form-control" name="publishedat" id="Publishedat" placeholder="Publié à" value="<?php echo $row['publishedat']; ?>" required>
              </div>
<div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                <button class="bntStyle"  name="Update" type="submit">Modifer</button>
            </div>
          </div>
       
     
 </form>
             <?php endif ?>
      

    </div>  
 </div>
<?php
                }
            }
        ?>

           

 </div>
        <?php include('../footer.php') ?>
        </div>
</body>
</html>