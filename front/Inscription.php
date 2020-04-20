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




    <table align=center>

      <td>
      <td>
        <div class=titre>
          <p><br>Identification:</p>
        </div>
        <input type="text" class="form-control" placeholder="Email" name="mail"><br>
        <input type="text" class="form-control" placeholder="Mot de passe" name="mdp">
        <small id="emailHelp" class="form-text text-muted">Ne jamais transmettre ses identifiants à un
          tiers</small><br>


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
        <a href="InscriptionAcheteur.php"><input type="button" class="form-control"
            value="S'inscrire en tant qu'acheteur"></a><br>
        <a href="InscriptionVendeur.php"><input type="button" class="form-control"
            value="S'inscrire en tant que vendeur"></a><br><br><br>




      </td>
      </td>

    </table>

  </form>

  <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Information additionnelle sur le site ECEbay</h6>
                    <p>
                        ECEbay, c'est quoi? C'est le projet ambitieux de 3 élèves de l'ECE Paris de réaliser un site
                        d'enchère fonctionnel. Melant HTML, CSS, Bootstrap et MySql l'objectif était de faire un site fonctionnel.
                        Venez découvrir notre sélection d'article qui ne vous laissera pas indiférant! Alors rejoins-nous
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p>
                        37, quai de Grenelle, 75015 Paris, France <br>
                        ecebay.mail@gmail.com <br>
                        +33 06 45 75 92 06 <br>
                        +33 07 37 38 91 04 <br>
                    </p>
                </div>
            </div>
            <div class="footer-copyright text-center">&copy; 2020 Copyright | Droit d'auteur: Espada 
            </div>
    </footer>


</body>


</html>