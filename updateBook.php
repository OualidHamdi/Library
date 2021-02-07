
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
     ?>
        <!--start of form to add books-->
        <div class=" main-container">
       <div class="container">
           <form class="form-inline mb-3">
                    <div class="ilinetext">
                    <h5 class="title">UPDATE BOOK :</h5>
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
       
        <form action="function/update.php" method="post" enctype="multipart/form-data" class="container" id="needs-validation" novalidate>
          
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

    </div>  
 </div>
<?php
                }
            }
        ?>

           

 </div>
        <?php include('footer.php') ?>
        </div>
</body>
</html>