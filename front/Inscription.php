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
<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-5">
                  <a class="nav-link " href="accueil.php">| Accueil |<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-3">
                  <a class="nav-link" href="achats/achats.php">| Achats |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  mx-3" href="vendeur.php">| Vente |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  ml-1" href="admin_welcome.html">| Admin |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  ml-1" href="panier.php">| Panier |</a>
                  </li>
              </ul>
          </nav>

  <!-- FORM  -->


  <form action="connecter.php" method="post">



    <div class="form-group">
      
  <table align=center>
    <td><td>
    <div class=titre>
                    <p><br>Identification:</p>
                </div>
      <input type="text" class="form-control" placeholder="Email" name="mail"><br>
      <input type="text" class="form-control" placeholder="Mot de passe" name="mdp">
      <small id="emailHelp" class="form-text text-muted">Ne jamais transmettre ses identifiants à un tiers</small><br>
      
      
      <div class="radio">
        <label><input type="radio" name="check" value="vendeur">Vendeur</label>
      </div>

      <div class="radio">
        <label><input type="radio" name="check" value="acheteur">Acheteur</label>
      </div>

      <div class="radio">
        <label><input type="radio" name="check" value="admin">Admin</label>
      </div><br>

      
    <input type="submit" class="form-control" placeholder="Se connecter" name="login"><br><br><br>
   
    <div class=titre>
                    <h7><br>S'inscrire:</h7>
                </div>
    <a href="InscriptionAcheteur.php"><input type="button" class="form-control" value="S'inscrire en tant qu'acheteur" ></a><br>
    <a href="InscriptionVendeur.php"><input type="button" class="form-control" value="S'inscrire en tant que vendeur"></a>


      </td></td>

    </table>
    </div>

    
      

    



  </form>




</html>