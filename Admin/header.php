<nav class="navbar navbar-expand-md navbar-dark ">
   
    <div class="dual-collapse1">
       <b> <a class="navbar-brand mx-auto" href="../index.php" style=" margin-right: 10px !important;">LIBRARY </a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon "></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto itme-end">
            <li class="nav-item">
                <b><a class="nav-link" href="../home.php">HOME</a></b>
            </li>
            <li class="nav-item">
               <b> <a class="nav-link" href="../book.php">BOOKS</a></b>
            </li>

            <li class="nav-item">
               <b> <a class="nav-link" href="../contact.php">CONTACT US</a></b>
            </li>

 <?php if(!isset($_SESSION['first_name'])&&!isset($_SESSION['last_name'])):?>
                   <li class="nav-item">
               <b> <a class="nav-link" href="login.php">LOGIN</a></b>
            </li>
                 <?php else : ?>
                      <li class="nav-item">
               <b> <a class="nav-link" href="books.php">MANAGEMENT</a></b>
            </li>
            <li class="nav-item">
               <b> <a class="nav-link" href="../function/logout.php">LOGOUT</a></b>
            </li>
                       <?php endif ?>

        </ul>
    </div>
</nav>