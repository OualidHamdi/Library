    <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['auteur']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['publishedat']; ?></td>
            <td>
              <form action="updateBook.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
               <button  type="submit"  name="edit_Book" class="btn btn-warning"> Update</button>
              </form>
          <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer" style="width: 67%;border:none;">
        
       <form action="delete.php" method="post">
          
          <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
          <button type="submit" class="btn btn-danger" name="delete">YES</button>
       </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>
                
                    <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                    <button type="submit" name="cat_delete_btn" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> Delete</button>
                </form>
            </td>
          </tr>
          <?php
        }
      }else {
        echo "Aucun Enregistrement Trouvé";
      }
    ?>

