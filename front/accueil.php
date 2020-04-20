<?php
    include 'achats/action.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Akatsuki Inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function () {
            $('.header').height($(window).height());

        });
    </script>

</head>

<body class="fond" > 

        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-light" >
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
                    <a class="nav-link  ml-1" href="Inscription.php">| Admin |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  ml-1" href="Inscription.php">| Panier |</a>
                  </li>
              </ul>
          </nav>

          <?php 
            $query="SELECT * from article";
            $statement=$connexion->prepare($query);
            $statement->execute();
            $result=$statement->get_result();
            $row=$result->fetch_assoc();
            $row2=$result->fetch_assoc();
            $row3=$result->fetch_assoc();
            ?>
                <div>
                    <!-- Titre et description -->
                    <div class="col-sm-4 gauche">
                        <h1>Bienvenue sur ECEbay, le premier site d'e-commerce d'antiquités !</h1>
                    </div>
                    <!-- Carousel -->
                    <div id="carouselExampleControls" class="carousel slide col-sm-4 main" data-ride="carousel" data-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="Inscription.php"><img class=" w-100" src="photos/<?=$row['photo'];?>"  alt="First slide" ></a>
                                <div class=" d-none d-md-block">
                                    <h5><?= $row['nom_article'];?></h5>
                                    <p><?= $row['prix'];?> euros</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <a href="Inscription.php"><img class="w-100" src="photos/<?=$row2['photo'];?>" alt="Second slide"></a>
                                <div class=" d-none d-md-block">
                                    <h5><?= $row2['nom_article'];?></h5>
                                    <p><?= $row2['prix'];?> euros</</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="Inscription.php"><img class=" w-100" src="photos/<?=$row3['photo'];?>" alt="Third slide"></a>
                                <div class=" d-none d-md-block">
                                    <h5><?= $row3['nom_article'];?></h5>
                                    <p><?= $row3['prix'];?> euros</</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>          
            <h3 class="titrecar">Actuellement à vendre</h3>

    <!-- pied de page -->
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