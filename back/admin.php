<?php
    include  'admin_crud.php';
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
        <a class="navbar-brand" href="#"><img src="akatsuki.png" alt="Logo" style="width: 40px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"><img src="akatsuki.png" alt="Logo" style="width: 40px"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main part-->
    <div class="container-fluid">

        <div class="row">

            <!-- Ajouter un vendeur dans la table vendeur-->
            <div class="col-md-4">
                <h2 class="text-center">Ajouter un vendeur</h2>
                <form action="admin_crud.php" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom" name="nom_vendeur">
                    </div>

                    <div class="form-group">
                        <input type="mail" class="form-control" placeholder="Mail" name="mail">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-dark btn-lg btn-block" value="Ajouter"
                            name="ajouter_vendeur">
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

                                <button type="button" class="badge badge-info" data-toggle="modal" data-target="#myModal">Modifier</button>

                                <a href="admin_crud.php?delete=<?=$row['id_vendeur']; ?>"
                                    class="badge badge-danger">Supprimer</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>


        <!-- Modal popup with boostrap -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modifier le vendeur</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>





        <!-- ACHETEUR  -->
        <div class="row">

            <div class="col-md-4">
                <h2>Ajouter un acheteur</h2>
            </div>

        </div>

    </div>



</body>

</html>