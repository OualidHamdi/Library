    <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['auteur']; ?></td>
            <td><?php echo '<img src="upload/'.$row['image'].'" width="100">'?></td>
            <td><?php echo $row['publishedat']; ?></td>
            <td>
              <form action="updateBook.php" method="post" style="float: left;">
                <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
               <button  type="submit"  name="edit_Book" class="btn btn-warning"> Update</button>
              </form>
      
              
                   <form action="deleteBook.php" method="post" >
                     <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-danger" > Delete</button>
                   </form>
                
            </td>
          </tr>
          <?php
        }
      }else {
        echo "Aucun Enregistrement Trouvé";
      }
    ?>

