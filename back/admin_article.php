<?php
    include  'admin_crud_article.php';
    
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

    <title>Admin</title>
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
        <a class="nav-link" href="../front/Inscription.php">| Achats |</a>
      </li>
      <li class="nav-item">
          <a class="nav-link  mx-3" href="../front/Inscription.php">| Vente |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ml-1" href="../front/admin_welcome.html">| Admin |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ml-1" href="../front/Inscription.php">| Panier |</a>
        </li>
    </ul>
    <a href="../front/Inscription.php"><button type="button" class="btn btn-danger">Deconnexion</button></a>

</nav>

    <!-- article-->
    <div class="container-fluid">

        <div class="row">
            <div class="col pt-4">
                <a href="../front/admin_welcome.html"><button type="button" class="btn btn-secondary  btn-lg " name="b1">Retour menu</button></a> 
                </div>

            <!-- Ajouter.modifier un article dans la table article-->
            <div class="col-md-4">

                <h2 class="text-center">Ajouter un article</h2>
                <form action="admin_crud_article.php" method="post" enctype="multipart/form-data">
              

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
                <input type="radio" name="card" value="enchere">Ferraille
                <input type="radio" name="card" value="Achat immédiat">Musée
                <input type="radio" name="card" value="Meilleure offre"> VIP</tr>
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

            <!-- DB article -->

            <div class="col-md-6">

            <?php

$id_vendeur=$_SESSION['idvendeur'];
$query="SELECT * from article";
$statement=$connexion->prepare($query);
$statement->execute();
$result=$statement->get_result();

?>



<h2 class="text-center latable">Articles de la table "article"</h2>
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
</tr>
</thead>
<tbody>
<?php while($row=$result->fetch_assoc()){ ?>
<tr>
    <td><?= $row['id_article'];?></td>
    <td><img src="../front/photos/<?= $row['photo'];?>" width="35"></td>
    <td><?= $row['nom_article'];?></td>
    <td><?= $row['description1'];?></td>
    <td><?= $row['categorie'];?></td>
    <td><?= $row['prix'];?></td>
    <td><?= $row['typevente'];?></td>

    <td>
        <a href="admin_crud_article.php?delete=<?=$row['id_article']; ?>"
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