<?php
    include 'offre_vendeur_crud.php';
    include '../front/achats/action2.php';
    include '../front/achats/action.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Akatsuki Inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="panier.css">
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
                  <a class="nav-link" href="achats/achats.php">| Achats |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  mx-3" href="Inscription.php">| Vente |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  ml-1" href="panier.html">| Panier |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  ml-1" href="Inscription.php">| Admin |</a>
                  </li>
              </ul>
              <a href="../Inscription.php"><button type="button" class="btn btn-danger">Deconnexion</button></a>
          </nav>

            <div class="form-group">       
                    <form action="offre_vendeur_crud.php" method="post">
                        <input type="text"  name="offre">
                        <input  type="submit" value="Faire une offre" name="bouton">
                    </form>
            </div>
            <div>
                Offre de l'acheteur:
                <?php 
                    $var = $_SESSION['pablo'];
                    $query="SELECT offre from article WHERE id_article='$var'";
                    $statement2=$connexion->prepare($query);
                    $result2 = $statement2->execute();
                    $result2=$statement2->get_result(); 
                    $row=$result2->fetch_assoc();

                    echo $row['offre'];
                ?>
                euros
            </div>
            <form action="offre_vendeur_crud.php" method="post">
                <input  type="submit" value="Accepter l'offre" name="boutton">
            </form>
            

    <!-- pied de page -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Information additionnelle sur le Bankai</h6>
                    <p>
                        Bankai (解, Libération finale , ou Libération complète ) est la forme finale et complète du
                        Zanpakutō, c'est l'aboutissement de son entraînement en matière de communication pour le
                        Shinigami.
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p>
                        37, quai de Grenelle, 75015 Paris, France <br>
                        gso@gmail.com <br>
                        +33 01 02 03 04 05 <br>
                        +33 01 03 02 05 04
                    </p>
                </div>
            </div>
            <div class="footer-copyright text-center">&copy; 2020 Copyright | Droit d'auteur: Espada 
            </div>
    </footer>




</body>

</html> 


