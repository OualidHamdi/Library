<nav class="navbar navbar-expand-md navbar-dark ">

        <?php 
      
    if(($_SESSION['language'])=="EN"):?>
    <div class="dual-collapse1">
       <b> <a class="navbar-brand mx-auto" href="../index.php" style=" margin-right: 10px !important;">LIBRARY </a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon "></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto itme-end">
            <li class="nav-item">
                <b><a class="nav-link"  href="../home.php">HOME</a></b>
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
               <b> <a class="nav-link" href="books.php">EDIT</a></b>
            </li>
            <li class="nav-item">
               <b> <a class="nav-link" href="../function/logout.php" title="LOGOUT"><img src="../img/logout.png"></a></b>
            </li>
                       <?php endif ?>
                       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          EN <img src="../img/en.jpg"  width="30" >
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="../function/FR.php">FR <img src="../img/fr.jpg" width="30" ></a>

        </div>
      </li>
        </ul>
    </div>
     <?php else : ?>

      <div class="dual-collapse1">
       <b> <a class="navbar-brand mx-auto" href="../index.php" style=" margin-right: 10px !important;">BIBLIOTHÈQUE </a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon "></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto itme-end">
            <li class="nav-item">
                <b><a class="nav-link" href="../home.php">ACCUEIL</a></b>
            </li>
            <li class="nav-item">
               <b> <a class="nav-link" href="../book.php">LIVRES</a></b>
            </li>
            <li class="nav-item">
               <b> <a class="nav-link" href="../contact.php">CONTACTEZ-NOUS</a></b>
            </li>

                  <?php if(!isset($_SESSION['first_name'])&&!isset($_SESSION['last_name'])):?>
                   <li class="nav-item">
               <b> <a class="nav-link" href="login.php">CONNEXION</a></b>
            </li>
                 <?php else : ?>
                      <li class="nav-item">
               <b> <a class="nav-link" href="books.php">ÉDITER</a></b>
            </li>
            <li class="nav-item">
               <b> <a class="nav-link" href="../function/logout.php"title="DÉCONNECTER"><img src="../img/logout.png"></a></b>
            </li>
                       <?php endif ?>
                       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          FR <img src="../img/fr.jpg" width="30" >
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="../function/EN.php">EN <img src="../img/en.jpg"  width="30"> </a>

        </div>
      </li>
        </ul>
    </div>

       <?php endif ?>
    </div>
</nav>