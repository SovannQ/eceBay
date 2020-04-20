<?php   include 'connecter.php';
    include  'vendeur_crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="../back/admin_styles.css">
    <link rel="stylesheet" type="text/css" href="vendeur.css">

    <title>VENDEUR</title>


</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light jolie" tyle="background-color: whitesmoke">
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
                    <a class="nav-link" href="../front/achats/achats.php">| Achats |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled mx-3" href="#">| Vente |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled ml-1" href="#">| Admin |</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


    <!-- acheteur-->
    <div class="container-fluid">

        <!-- PHOTO DE PROFIL -->
        <!-- dans la bdd -->
            <h3>
                <center>Profil</center>
                <br>
            </h3>
        <div class="box">
            
            <?php

                $id_vendeur=$_SESSION['idvendeur'];
                $query="SELECT bg from vendeur WHERE id_vendeur='$id_vendeur'";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                $row=$result->fetch_assoc()
                
            ?>

            <?php  if($row){ ?>
            <style>
                body {
                    background-image: url("photos/<?= $row['bg']; ?>");
                }
            </style>

            <?php } ?>


            <h4>Vendeur: <?= $_SESSION['nomvendeur'] ?><br>
            Votre adresse mail : <?= $_SESSION['mail'] ?><br>
            Votre n° d'identification vendeur : <?= $_SESSION['idvendeur'] ?></h4>
            


            <?php

                $id_vendeur=$_SESSION['idvendeur'];
                $query="SELECT photo from vendeur WHERE id_vendeur='$id_vendeur'";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                $row=$result->fetch_assoc()
                
            ?>

            <?php  if($row){ ?>

            <img src="photos/<?= $row['photo'];?>" width="200px" height="200px"></<img>

            <?php } ?>

            <br>
            


        </div>

        <form action="vendeur_crud.php" method="post" enctype="multipart/form-data"
                class="d-flex justify-content-center">

                <div class="form-group ">
                    <input type="file" class="custom-file" name="photo">
                    <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter une photo de profil"
                        name="submitphoto">
                </div>


                <!-- background -->
                <div class="form-group ">
                    <input type="file" class="custom-file" name="bg">
                
                    <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter un fond d'écran"
                        name="submitbg">
                </div>
                <!-- MARCHE PAS LE BACKGROUND BORDEL -->


            </form>


        <br>
        <!-- Ajouter.modifier un acheteur dans la table acheteur-->

        <div class="milieu">
            

            <form action="vendeur_crud.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_acheteur" value="<?= $id_acheteur; ?>">

                <table align=center>
                
                    <tr><td>
                    <h2>Ajouter un article</h2></td></tr>

                    <div class="form-group">
                        <tr>
                       <td> <input type="radio" name="categorie" value="feraille" id="e">Ferraille ou trésor
                        <input type="radio" name="categorie" value="musee" id="a">Bon pour le musée
                        <input type="radio" name="categorie" value="vip" id="m"> Objet VIP</td></tr>

                    </div>
                
            </table>

                <div class="form-group ">
                    <input type="file" class="custom-file" name="photo">
                </div>

                <div class="form-group ">
                    <input type="file" class="custom-file" name="photo2">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nom de l'article" name="nom_article">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Petite description" name="description1">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Plus d'informations" name="description2">
                    
                </div>


                <div class="form-group">
                    <input type="radio" name="typevente" value="enchere">Enchère
                    <input type="radio" name="typevente" value="immediat">Achat immédiat
                    <input type="radio" name="typevente" value="offre">Meilleure offre
                </div>


                <div class="form-group">
                    <input type="number" class="form-control" placeholder="prix" name="prix">
                </div>




                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter"
                        name="ajouterarticle">


                </div>
            </form>





        </div>







        <!-- DB acheteur -->

        <div class="col-md-12 jolie">

            <?php

                $id_vendeur=$_SESSION['idvendeur'];
                $query="SELECT * from article WHERE id_vendeur='$id_vendeur'";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
               
                ?>



            <h2 class="text-center latable">Vos articles</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID de l'article</th>
                        <th>Photo</th>
                        <th>Nom de l'article</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>Type de vente</th>
                        <th>Action</th>
                        <th>En ligne jusqu'à</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row['id_article'];?></td>
                        <td><img src="photos/<?= $row['photo'];?>" width="35"></td>
                        <td><?= $row['nom_article'];?></td>
                        <td><?= $row['description1'];?></td>
                        <td><?= $row['categorie'];?></td>
                        <td><?= $row['prix'];?></td>
                        <td><?= $row['typevente'];?></td>
                        <td><?= $row['datefin'];?></td>

                        <td>
                            <a href="vendeur_crud.php?delete=<?=$row['id_article']; ?>"
                                class="badge badge-danger">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>


    </div>
    </div>

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