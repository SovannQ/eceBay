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


    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: burlywood">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mx-3">
        <a class="nav-link" href="Inscription.php">| Achats |</a>
      </li>
      <li class="nav-item">
          <a class="nav-link  mx-3" href="Inscription.php">| Vente |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ml-1" href="#">| Admin |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ml-1" href="Inscription.php">| Panier |</a>
        </li>
    </ul>
    <a href="../Inscription.php"><button type="button" class="btn btn-danger">Deconnexion</button></a>

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
    <a href="InscriptionAcheteur.php"><input type="button" class="form-control" value="S'inscrire en tant qu'acheteur" ></a>
    <a href="InscriptionVendeur.php"><input type="button" class="form-control" value="S'inscrire en tant que vendeur"></a>



  </form>




</html>