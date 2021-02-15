    <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
           <tbody role="rowgroup">
          <tr class="trLine" role="row">
            <td  role="cell"><?php echo $row['title']; ?></td>
            <td  role="cell"><?php echo $row['auteur']; ?></td>
            <td  role="cell"><?php echo '<img src="../upload/'.$row['image'].'" width="100">'?></td>
            <td  role="cell"><?php echo $row['publishedat']; ?></td>
            <td  role="cell"><?php echo $row['Prix']; ?></td>
            <td  role="cell"><?php echo $row['QStock']; ?></td>
            <td  role="cell">
              <form action="../Admin/updateBook.php" method="post" >
                <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                <?php if(($_SESSION['language'])=="EN"):?>
           <button  type="submit"  name="edit_Book" class="btn btn-warning edit_Book"  > Update</button>
            <?php else : ?>
            <button  type="submit"  name="edit_Book" class="btn btn-warning edit_Book"  > Modifier</button>
             <?php endif ?>
               
              </form>
      
              
                   <form action="../Admin/deleteBook.php" method="post"  >
                     <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                     <?php if(($_SESSION['language'])=="EN"):?>
            <button type="submit" name="delete_btn" class="btn btn-danger delete_btn"  > Delete</button>
            <?php else : ?>
                <button type="submit" name="delete_btn" style="padding: 8px 5px;" class="btn btn-danger delete_btn"  > Supprimer</button>
             <?php endif ?>
                     
                   </form>
                
            </td>
          </tr>



  </tbody>
          <?php
        }
      }else {
        echo "Aucun Enregistrement Trouvé";
      }
    ?>

