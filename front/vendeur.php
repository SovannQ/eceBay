<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        <h5>
                            Nom
                        </h5>
                        <h6>
                            Mail
                        </h6>
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


                <!-- e -->
                <div class="col-md-4">

                    <h2 class="text-center">Ajouter un article</h2>
                    <form action="admin_crud_vendeur.php" method="post">
                        <input type="hidden" name="id_article" value="<?= $id_article; ?>">

                        <input type="hidden" name="id_vendeur" value="<?= $id_vendeur; ?>">
    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nom" name="nom_article"
                                value="<?= $nom_article; ?>">
                        </div>
    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Description" name="description" value="<?= $description; ?>">
                        </div>
    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="categorie" name="categorie"
                                value="<?= $categorie; ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="prix" name="prix"
                                value="<?= $prix; ?>">
                        </div>
    
                        <div class="form-group">
                            <?php if($updated==true) { ?>
                            <input type="submit" class="btn btn-info btn-block" value="Mettre à jour" name="updated">
                            <?php } else { ?>
                            <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter"
                                name="ajouter_article">
                            <?php } ?>
                        </div>
    
                    </form>
    
                </div>


                <!-- DB Vendeur -->

            <div class="col-md-6">

                <?php
                $query="SELECT * from article";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                ?>

                <h2 class="text-center">DB Article</h2>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>ID_Vendeur</th>
                            <th>Nom_Article</th>
                            <th>Description</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$result->fetch_assoc()){ ?>
                        <tr>

                            <td><?= $row['article'];?></td>
                            <td><?= $row['nom_article'];?></td>
                            <td><?= $row['mail'];?></td>
                            <td><?= $row['mdp'];?></td>

                            <td>
                                <a href="admin_vendeur.php?edit=<?= $row['id_vendeur']; ?>"
                                    class="badge badge-primary">modifier</a>
                                <a href="admin_crud_vendeur.php?delete=<?=$row['id_vendeur']; ?>"
                                    class="badge badge-danger">Supprimer</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>


            </div>
           
        </form>
    </div>
   
</body>

</html>