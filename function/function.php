
<?php
     if(isset($_SESSION['success']) && $_SESSION['success'] !='')
     {
         echo '<h5 style="background-color:#499250;color:white;text-align:center;padding: 20px;margin-bottom: 20px;">'.$_SESSION['success'].'</h5>';
         unset($_SESSION['success']);
     }
      
       if(isset($_SESSION['status']) && $_SESSION['status'] !='')
     {
         echo '<h5 style="background-color:#da5865;color:white;text-align:center;padding: 20px;margin-bottom: 20px;">'.$_SESSION['status'].'</h5>';
         unset($_SESSION['status']);
     }

      

?>