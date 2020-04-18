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
    <link rel="stylesheet" type="text/css" href="admin_styles.css">
    <link rel="stylesheet" type="text/css" href="vendeur.css">

    <title>VENDEUR</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: burlywood">
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
                    <a class="nav-link" href="achats.html">| Achats |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">| Catégories |</a>
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
        <div class="col-md-12">
            <h2>
                <center>Profil</center>
            </h2>

            <?php

                $id_vendeur=$_SESSION['idvendeur'];
                $query="SELECT photo from vendeur WHERE id_vendeur='$id_vendeur'";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                $row=$result->fetch_assoc()
                
            ?>

            <?php  if($row){ ?>
            <td>
                <center><img src="photos/<?= $row['photo'];?>" width="300px"></center>
            </td>
            <?php } ?>

            <br>
            <form action="vendeur_crud.php" method="post" enctype="multipart/form-data"
                class="d-flex justify-content-center">

                <div class="form-group ">
                    <input type="file" class="custom-file" name="photo">
                </div>

                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter une photo de profil" name="submitphoto">
                </div>

                
                <!-- background -->
                <div class="form-group ">
                    <input type="file" class="custom-file" name="bg">
                </div>

                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter un fond d'écran" name="submitbg">
                </div>
                <!-- MARCHE PAS LE BACKGROUND BORDEL -->
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
                body{
                    
                }
                </style>
            
            <?php } ?>

            </form>

            
        </div>

        <h2>Bienvenue, <?= $_SESSION['nomvendeur'] ?></h2>
        <h2>Mail : <?= $_SESSION['mail'] ?></h2>
        <h2>Id vendeur : <?= $_SESSION['idvendeur'] ?></h2>
            <br>
        <!-- Ajouter.modifier un acheteur dans la table acheteur-->

        <div class="col-md-12">
            <h2>Ajouter un article</h2>
            <form action="vendeur_crud.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_acheteur" value="<?= $id_acheteur; ?>">

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
                    <input type="text" class="form-control" placeholder="Grande description" name="description2">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Categorie" name="categorie">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" placeholder="prix" name="prix">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="typevente" name="typevente">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter"
                        name="ajouterarticle">


                </div>
            </form>
        </div>

    </div>





    <!-- DB acheteur -->

    <div class="col-md-12">

        <?php

                $id_vendeur=$_SESSION['idvendeur'];
                $query="SELECT * from article WHERE id_vendeur='$id_vendeur'";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
               
                ?>



        <h2 class="text-center">Vos articles</h2>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID de l'article</th>
                    <th>Photo</th>
                    <th>Nom de l'article</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Type de vente</th>
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



</body>

</html>