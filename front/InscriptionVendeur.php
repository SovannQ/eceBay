<?php

    include 'inscrire.php'

?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="Inscription.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.header').height($(window).height());

        });
    </script>

</head>

<body>


    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="images caroussel/pnl.jpg" alt="Logo" style="width: 40px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"><img src="akatsuki.png" alt="Logo" style="width: 40px"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Categorie</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Achat</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Vente</a></li>
                <li class="nav-item"><a class="nav-link" href="Inscription.html">Votre compte</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Panier</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="text-center titre">
        <h1>Formulaire inscription Vendeur de ECEbay</h1>
    </div>
    <br>
  

    <form action="inscrire.php" method="post" align=center>

        <table align=center>
            <tr>
                <div class=titre>
                    <p><br>Identification:</p>
                </div>
                <br>
    
                <td><input type="text" class="form-control" placeholder="Nom" name="nom"></td>
    
            </tr>
        </table>

        <div class="form-group ecriture">
            <br>
            <label>Email address: </label>
            <input type="text" class="form-control taille" name="mail" placeholder="Enter email">
        </div>

        <div class="form-group ecriture">
            <label> Mot de passe: </label>
            <input type="password" class="form-control taille" name="mdp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Ne jamais transmettre ses identifiants à un tiers</small>
        </div>
        <br>
        <input type="checkbox" id="condition" name="condition" value="condition">
        <label for="condition"> <a
                href="https://www.youtube.com/watch?v=L_KikUmaAxg&list=RDMML_KikUmaAxg&start_radio=1">J'accepte les
                conditions utilisateur & contrat légal</a></label><br>
        <input type="submit" name="inscription" value="S'inscrire" id="inscription">


    </form>   <!--  <form action="TraitementInscription.php" method="post"> -->





</body>

</html>