<?php
    include  'admin_crud_vendeur.php';
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
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- VENDEUR-->
    <div class="container-fluid">

        <div class="row">

            <!-- Ajouter.modifier un vendeur dans la table vendeur-->
            <div class="col-md-4">

                <h2 class="text-center">Ajouter/modifier un vendeur</h2>
                <form action="admin_crud_vendeur.php" method="post">
                    <input type="hidden" name="id_vendeur" value="<?= $id_vendeur; ?>">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom" name="nom_vendeur"
                            value="<?= $nom_vendeur; ?>">
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
                            name="ajouter_vendeur">
                        <?php } ?>
                    </div>

                </form>

            </div>

            <!-- DB Vendeur -->

            <div class="col-md-6">

                <?php
                $query="SELECT * from vendeur";
                $statement=$connexion->prepare($query);
                $statement->execute();
                $result=$statement->get_result();
                ?>

                <h2 class="text-center">DB Vendeur</h2>
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
                            <td><?= $row['id_vendeur'];?></td>
                            <td><?= $row['nom_vendeur'];?></td>
                            <td><?= $row['mail'];?></td>
                            <td><?= $row['mdp'];?></td>

                            <td>
                                <a href="admin.php?edit=<?= $row['id_vendeur']; ?>"
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



        <!-- ACHETEUR  -->
    </div>



</body>

</html>