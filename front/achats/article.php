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
        <script type="text/javascript">
            $(document).ready(function () {
                $('.header').height($(window).height());
            });
        </script>
    
    </head>


<body style="background-color: grey">

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: burlywood">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active ml-5">
              <a class="nav-link " href="../index2.html">| Accueil |<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="achats.php">| Achats |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../Inscription.html">| Catégories |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-3" href="#">| Vente |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ml-1" href="../panier.php">| Panier |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ml-1" href="../back/admin_welcome.html">| Admin |</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
          </form>
        </div>
      </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">ECEbay</h1>
      </div>
      <div class="card mt-4 l">
        <div class="row">
            <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide col-sm-4" data-ride="carousel" data-interval="4000">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class=" w-100" src="<?= $vphoto;?>"  alt="First slide" >
                      </div>
                      <div class="carousel-item">
                          <img class="w-100" src="<?= $vphoto2;?>" alt="Second slide">
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
                      <h6 class="card-text">Description: <?= $vdescription;?></h6>
                    </li>
                    <li>
                      <p class="card-text">Catégorie: <?= $vcategorie;?></p>
                    </li>
                  <p style="color:white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                  <?php  
                     $_SESSION['id_panier']= '2';
                     var_dump($_SESSION['id_panier']);
                     $_SESSION['id_article']=$vid_article;
                     var_dump($_SESSION['id_article']);
                     $_SESSION['vprix']=$vprix;
                     var_dump($_SESSION['vprix']);
                  ?>
                  <form action="action2.php" method="post">
                  <input type="submit" class="btn btn-outline-success" name="ajouter_au_panier" value="Ajouter au panier">
                  <a href="#"><button type="button" class="btn btn-success">Voir panier</button></a>
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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
