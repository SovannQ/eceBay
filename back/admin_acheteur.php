<?php
    include  'admin_crud_acheteur.php';
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
    <nav class="navbar navbar-expand-lg navbar-light">
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

    <!-- acheteur-->
    <div class="container-fluid">

        <div class="row">
            <div class="col pt-4">
                <a href="..\front\admin_welcome.html"><button type="button" class="btn btn-secondary  btn-lg " name="b1">Retour menu</button></a> 
                </div>

            <!-- Ajouter.modifier un acheteur dans la table acheteur-->
            <div class="col-md-4">

                <h2 class="text-center">Ajouter/modifier un acheteur</h2>
                <form action="admin_crud_acheteur.php" method="post">
                    <input type="hidden" name="id_acheteur" value="<?= $id_acheteur; ?>">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom" name="nom_acheteur"
                            value="<?= $nom_acheteur; ?>">
                    </div>

                    <div class="form-group">
                        <input type="mail" class="form-control" placeholder="Mail" name="mail" value="<?= $mail; ?>">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="mdp"
                            value="<?= $mdp; ?>">
                    </div>

                    <div class="form-group">
                        <?php if($updated==true) { ?>
                        <input type="submit" class="btn btn-info btn-block" value="Mettre à jour" name="updated">
                        <?php } else { ?>
                        <input type="submit" class="btn btn-primary btn-dark btn-block" value="Ajouter"
                            name="ajouter_acheteur">
                        <?php } ?>
                    </div>

                </form>

            </div>

            <!-- DB acheteur -->

            <div class="col-md-6">

                <?php
                $query="SELECT * from acheteur";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                ?>

                <h2 class="text-center">DB acheteur</h2>
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Mail</th>
                            <th>Mot de passe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$result->fetch_assoc()){ ?>
                        <tr>
                            <td><?= $row['id_acheteur'];?></td>
                            <td><?= $row['nom_acheteur'];?></td>
                            <td><?= $row['mail'];?></td>
                            <td><?= $row['mdp'];?></td>

                            <td>
                                <a href="admin_acheteur.php?edit=<?= $row['id_acheteur']; ?>"
                                    class="badge badge-primary">modifier</a>
                                <a href="admin_crud_acheteur.php?delete=<?=$row['id_acheteur']; ?>"
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