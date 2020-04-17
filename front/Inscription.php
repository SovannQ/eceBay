<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Akatsuki Inc.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles2.css">
  <link rel="stylesheet" type="text/css" href="Inscription.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript">

  </script>

</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: burlywood">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active ml-5">
          <a class="nav-link " href="index2.html">| Accueil |<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="achats.html">| Achats |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">| Catégories |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled mx-3" href="#">| Vente |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled ml-1" href="#">| Admin |</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
      </form>
    </div>
  </nav>

  <!-- FORM  -->


  <form action="connecter.php" method="post">



    <div class="form-group">
      
      <input type="text" class="form-control" placeholder="Email" name="mail">
      <input type="text" class="form-control" placeholder="Mot de passe" name="mdp">
    </div>

    
      <div class="radio">
        <label><input type="radio" name="check" value="vendeur">Vendeur</label>
      </div>

      <div class="radio">
        <label><input type="radio" name="check" value="acheteur">Acheteur</label>
      </div>

      <div class="radio">
        <label><input type="radio" name="check" value="admin">Admin</label>
      </div>


    <input type="submit" class="form-control" placeholder="Se connecter" name="login">



  </form>




</html>