<?php include "connecter.php";
// continuer la session de connecter.php 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js%22%3E"></script>
    <link rel="stylesheet" type="text/css" href="vendeur.css">
     <title>Document</title>
</head>

<body>

        <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: burlywood">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-5">
                    <a class="nav-link " href="#">| Accueil |<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="achat.html">| Achats |</a>
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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>


    <div class="container-fluid emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                            alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Changer la photo
                            <input type="file" name="photo">
                            
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="profile-head">
                        <h4>
                            Bienvenue, <?= $_SESSION['mail'] ?>

                        </h4>
                        <a href="logout.php">Se déconnecter</a>
                        <h5>
                            <!-- VOIR connecter.php  -->
                           Id vendeur : <?= $_SESSION['idvendeur']  ?> 
                        </h5>
                        <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                </div>


                <!-- FORMULAIRE -->
                <div class="col-md-12">

                    <h2 class="text-center">Ajouter un article</h2>
                    <form action="vendeur_crud.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id_article" value="<?= $id_article; ?>">

                        <input type="hidden" name="id_vendeur" value="<?= $id_vendeur; ?>">
                        
    
                        <div class="form-group">
                            <input type="file" class="custom-file"  name="photo">
                        </div>

                        <div class="form-group">
                            <input type="file" class="custom-file"  name="photo2">
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
                            <input type="text" class="form-control" placeholder="categorie" name="categorie"
                            >
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="prix" name="prix"
                            >
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="type" name="type_vente">
                        </div>
    
                        <div class="form-group">
                            
                            <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter"
                                name="ajouter_article">
                        </div>
    
                    </form>
    
                </div>

<!--  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <!-- DB Vendeur -->

            <div class="col-md-12">
                
            
                <?php
                $id_vendeur = $_SESSION['idvendeur'];

                $query="SELECT * from article WHERE id_vendeur='$id_vendeur'";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                ?>

                <h2 class="text-center">DB Article</h2>
                
                    <table class="table">
                    <thead>
                        <tr>
                            <th>ID Article</th>
                            <th>Photo</th>
                            <th>ID Vendeur</th>
                            <th>Nom Article</th>
                            <th>Petite description</th>
                            <th>Grande description</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$result->fetch_assoc()){ ?>
                        <tr>

                            <td><?= $row['id_article'];?></td>
                            <td><img src=" <?= $row['photo']; ?>" width="25"></td>
                            <td><?= $row['id_vendeur'];?></td>
                            <td><?= $row['nom_article'];?></td>
                            <td><?= $row['description1'];?></td>
                            <td><?= $row['description2'];?></td>
                            <td><?= $row['categorie'];?></td>
                            <td><?= $row['prix'];?></td>
                            <td><?= $row['type_vente'];?></td>

                            <td>
                                <a href="..\back\admin_crud_article.php?delete=<?=$row['id_article']; ?>"
                                    class="badge badge-danger">Supprimer</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                
                </div>
            </div>


            </div>
           
        </form>
    </div>
   
</body>

</html>