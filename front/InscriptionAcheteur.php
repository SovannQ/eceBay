<?php

    include 'inscrire.php'

?>
<!DOCTYPE html>
<html>

<head>
    <title>Akatsuki Inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles2.css">
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
    <div class=titre>
       <p> Formulaire d'inscription en tant qu'acheteur  </p>
    </div>
    <br>

    


    <!-- FORM ACHETEUR -->
    <form action="inscrire.php" method="post" align=center>
        <div class="form-group ecriture">
            <div class=titre>
                <p><br>Vos identifiants:</p>
            </div>
            <br>

            <table align=center>
            <tr><td>
            <input type="text" class="form-control taille" name="nom" placeholder="Nom"><br>
       
        
            <input type="text" class="form-control taille" name="mail" placeholder="Enter email"><br>
        
            <input type="password" class="form-control taille" name="mdp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Ne jamais transmettre ses identifiants à un tiers</small></tr></td>
      </table>


      
      <div class=titre>
                <p><br>Domicile:</p>
            </div>

        <table align=center width=400px >
            
                <tr><td>
                <input type="text" class="form-control" placeholder="Nom de livraison" name="nom_livraison">

                <input type="text" class="form-control" placeholder="Rue" name="rue">
                <input type="text" class="form-control" placeholder="Ville" name="ville">
           
                <input type="text" class="form-control" placeholder="Code Postal" name="code_postal">
                <input type="text" class="form-control" placeholder="Pays" name="pays"> </tr></td>
        </table>
        <br>


        <div class=titre>
                    <p>Information bancaire:</p>
                </div>

        <table align=center>
            
            <tr>
                <input type="radio" name="card" value="visa">Visa
                <input type="radio" name="card" value="mastercard">MasterCard
                <input type="radio" name="card" value="americanexpress"> American Express</tr></table>
            
            <table align=center>   
            <tr>
            <td><input type="number" class="form-control" placeholder="N°de carte bancaire" name="numerocb"></td>
            <td><input type="text" class="form-control" placeholder="Nom du propriétaire" name="nom_carte"></td>
            </tr>
            <br>
            <tr>
                <td><input type="date" class="form-control" placeholder="Date expiration" name="date"></td>
                <td><input type="text" class="form-control" placeholder="CVV" name="cvv"></td>
            </tr>
           
        </table>
        <br>
        <table align=center>
        <tr> <td> <input type="checkbox" id="condition" name="condition" value="condition">
        <label for="condition"> <a
                href="https://www.youtube.com/watch?v=L_KikUmaAxg&list=RDMML_KikUmaAxg&start_radio=1">J'accepte les
                conditions utilisateur & contrat légal</a></label><br>
        <input type="submit" name="inscription_acheteur" value="S'inscrire" id="inscription" class="form-control soumettre" >
    </td></tr></table>
        


    </form>
    <!--  <form action="TraitementInscription.php" method="post"> -->





</body>

</html>