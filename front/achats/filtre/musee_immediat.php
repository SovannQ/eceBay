<?php
    include '../action.php';
?>


<!DOCTYPE html>
<html>

<head>
    <title>Akatsuki Inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../achats.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
            <li class="nav-item active ml-5">
              <a class="nav-link " href="../../index2.html">| Accueil |<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="../achats.php">| Achats |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../../Inscription.html">| Catégories |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  mx-3" href="#">| Vente |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ml-1" href="../../panier.html">| Panier |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ml-1" href="../../back/admin_welcome.html">| Admin |</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

      <header>
        <div>
            <a href="../panier.html"><img class="panier col-lg-1" src="../panier.jpg"></a>
            <a href="../../Inscription.html"><img class="panier col-lg-1" src="../connexion.jpg"></a>
            <img class="lgo col-lg-1" src="lgo.jpg">
            <a href="../achats.php"><h1 class="titre">Toutes catégories</h1></a>
        </div>
    </header>


<!-- MENU SUR LA GAUCHE -->
        <div class="menuleft col-sm-3">
            <ul class="nav flex-column">
            <hr color="black">
            <li class="nav-item">
            <hr color="black">  <a class="nav-link" href="feraille_immediat.php">Féraille ou Trésor</a><hr color="black">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="musee_immediat.php">Bon pour le musée</a><hr color="black">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vip_immediat.php">Accessoire VIP</a><hr color="black">
            </li>
            </ul>
        </div>

        <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Type de vente
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="musee_enchere.php">Enchères</a>
                <a class="dropdown-item" href="musee_offre.php">Plus offrand</a>
                <a class="dropdown-item" href="musee_immediat.php">Achat immédiat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../musee.php">Tout type de vente</a>
            </div>
        </div>
<!-- TITRE -->
      <div class="container">
        <h3 class="h3 titre">Bon pour le musee</h3>
<!-- ARTICLES -->
                <?php
                    $query="SELECT * from article WHERE type = 'immediat' ";
                    $statement=$connexion->prepare($query);
                    $statement->execute();
                    $result=$statement->get_result();
                ?>
        <div class="row bordure">
            <?php while($row=$result->fetch_assoc()){ ?>
                <?php if($row['categorie'] == "musee"){ ?>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                    <a href="article.php?article=<?= $row['id_article'];?>">
                            <img class="pic-1 img-fluid" src="<?= $row['photo'];?>">
                            <img class="pic-2 img-fluid photo" src="<?= $row['photo2'];?>">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?= $row['nom_article'];?>  |  <?= $row['type'];?>  |  <?= $row['categorie'];?></a></h3>
                        <p><?= $row['description'];?></p>
                        <div class="price">
                        <?= $row['prix'];?> euros
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
    <hr>

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