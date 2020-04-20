<?php
    include 'action.php';
    include 'action2.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Akatsuki Inc.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="article.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript">
            $(document).ready(function () {
                $('.header').height($(window).height());
            });
        </script>
    
    </head>


<body style="background-color: whitesmoke">

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: whitesmoke">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item mx-3">
              <a class="nav-link" href="achats.php">| Achats |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-3" href="Inscription.php">| Vente |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ml-1" href="../panier.php">| Panier |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ml-1" href="Inscription.php">| Admin |</a>
              </li>
          </ul>
          <a href="../Inscription.php"><button type="button" class="btn btn-danger ml_5">Deconnexion</button></a>

        </div>
      </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      
      <a href="achats.php"><h1>Catalogue ECEbay</h1></a>
      

      <div class="card mt-4 l">
        <div class="row">
            <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide col-sm-4" data-ride="carousel" data-interval="4000">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class=" w-100" src="../photos/<?= $vphoto;?>"  alt="First slide" >
                      </div>
                      <div class="carousel-item">
                          <img class="w-100" src="../photos/<?= $vphoto2;?>" alt="Second slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev yo" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next yo" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body oy col-sm-4">
                  <ul>
                  <li>
                      <h4>Nom: <?= $vnom_article;?></h4>
                    </li>
                    <li>
                      <h4>Prix: <?= $vprix;?> euros</h4>
                    </li>
                    <li>
                      <h5>Numéro de l'article: <?= $vid_article;?></h5>
                    </li>
                    <li>
                      <h5>Type de vente: <?= $vtype;?></h5>
                    </li>
                    <li>
                      <h6 class="card-text">Description courte: <?= $row['description1'];?></h6>
                    </li>
                    <li>
                      <h7 class="card-text">Plus d'info: <?= $row['description1'];?></h7>
                    </li>
                    <li>
                      <p class="card-text">Catégorie: <?= $vcategorie;?></p>
                    </li>
                  <p style="color:white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                  <?php  
                     $_SESSION['id_panier']= '2';
                     $_SESSION['id_article']=$vid_article;
                     $_SESSION['vprix']=$vprix;
                  ?>
                  <form action="action2.php" method="post">
                  <input type="submit" class=" soumettre" name="ajouter_au_panier" value="Ajouter au panier"><br>
                  <a href="../panier.php"><button type="button" class="btn soumettre">Voir panier</button></a>
                  </form>
                  </ul>
                </div>
        </div>
      </div>
          <!-- /.card -->

        

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
