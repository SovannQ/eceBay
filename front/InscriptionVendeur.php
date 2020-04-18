<?php

    include 'inscrire.php'

?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="Inscription.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.header').height($(window).height());

        });
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
    <br>
    <div class="text-center titre">
        <h1>Formulaire inscription Vendeur de ECEbay</h1>
    </div>
    <br>
  

    <form action="inscrire.php" method="post" align=center>

        <table align=center>
            <tr>
                <div class=titre>
                    <p><br>Identification:</p>
                </div>
                <br>
    
                <td><input type="text" class="form-control" placeholder="Nom" name="nom"></td>
    
            </tr>
        </table>

        <div class="form-group ecriture">
            <br>
            <label>Email address: </label>
            <input type="text" class="form-control taille" name="mail" placeholder="Enter email">
        </div>

        <div class="form-group ecriture">
            <label> Mot de passe: </label>
            <input type="password" class="form-control taille" name="mdp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Ne jamais transmettre ses identifiants à un tiers</small>
        </div>
        <br>
        <input type="checkbox" id="condition" name="condition" value="condition">
        <label for="condition"> <a
                href="https://www.youtube.com/watch?v=L_KikUmaAxg&list=RDMML_KikUmaAxg&start_radio=1">J'accepte les
                conditions utilisateur & contrat légal</a></label><br>
        <input type="submit" name="inscription" value="S'inscrire" id="inscription">


    </form>   <!--  <form action="TraitementInscription.php" method="post"> -->





</body>

</html>