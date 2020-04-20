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


    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: burlywood">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mx-3">
        <a class="nav-link" href="Inscription.php">| Achats |</a>
      </li>
      <li class="nav-item">
          <a class="nav-link  mx-3" href="Inscription.php">| Vente |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ml-1" href="#">| Admin |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  ml-1" href="Inscription.php">| Panier |</a>
        </li>
    </ul>
    <a href="../Inscription.php"><button type="button" class="btn btn-danger">Deconnexion</button></a>

</nav>
    <br>
    <div class="text-center titre">
        <h1>Formulaire d'inscription Acheteur</h1>
    </div>
    <br>




    <!-- FORM ACHETEUR -->
    <form action="inscrire.php" method="post" align=center>
        <div class="form-group ecriture">
            <div class=titre>
                <p><br>Identification:</p>
            </div>
            <br>
            <label>Nom: </label>
            <input type="text" class="form-control taille" name="nom" placeholder="Nom">
        </div>
        <div class="form-group ecriture">
            <label>Email address: </label>
            <input type="text" class="form-control taille" name="mail" placeholder="Enter email">
        </div>

        <div class="form-group ecriture">
            <label> Mot de passe: </label>
            <input type="password" class="form-control taille" name="mdp" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Ne jamais transmettre ses identifiants à un tiers</small>
        </div>

        <table align=center><br>
            <tr>
                <div class=titre>
                    <p>Domicile:</p>
                </div>
                <td><input type="text" class="form-control" placeholder="Nom" name="nom_livraison"></td>
                <td><input type="text" class="form-control" placeholder="Rue" name="rue"></td>
                <td><input type="text" class="form-control" placeholder="Ville" name="ville"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" placeholder="Code Postal" name="code_postal"></td>
                <td><input type="text" class="form-control" placeholder="Pays" name="pays"></td>
            </tr>
        </table>
        <br>
        <table align=center><br>
            <tr>
                <div class=titre>
                    <p>Information bancaire:</p>
                </div>
            </tr>
            <tr>
                <input type="radio" name="card" value="visa">Visa
                <input type="radio" name="card" value="mastercard">MasterCard
                <input type="radio" name="card" value="americanexpress"> American Express</tr>
            <br>
            <td><input type="number" class="form-control" placeholder="N°de carte bancaire" name="numerocb"></td>
            <td><input type="text" class="form-control" placeholder="Nom du propriétaire" name="nom_carte"></td>
            </tr>
            <tr>
                <td><input type="date" class="form-control" placeholder="Date expiration" name="date"></td>
                <td><input type="text" class="form-control" placeholder="CVV" name="cvv"></td>
            </tr>
        </table>
        <br>
       
        
        <div class="container">
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Conditions d'utilisation
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times; </button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                        <p>Les obligations de l acheteur dans le cadre d un contrat de vente commerciale
                        
Le contrat de vente commerciale implique deux obligations dans le chef de l'acheteur : il doit payer le prix et prendre livraison des marchandises.

L'obligation de payer le prix constitue la contrepartie de la remise de la marchandise par le vendeur 29. A cet égard, l'Acte uniforme relatif au droit commercial général prévoit que l'acheteur est tenu de prendre toutes les mesures nécessaires à l'accomplissement des formalités préalables au paiement effectif du prix. Ces formalités concernent surtout la vente internationale et les exigences posées en matière de garantie à première demande ou de crédit documentaire 30.

Le prix doit être versé directement au vendeur ou à la personne qui a reçu le pouvoir de recevoir le paiement en lieu et place du vendeur. </p>

<p>En principe, une fois le paiement effectué, l'acheteur est libéré de son obligation. Toutefois, il se peut que la complexité de l'opération ou son échelonnement dans le temps engendre des frais supplémentaires 31. C'est le cas, par exemple, lorsque la vente a donné lieu à l'établissement d'actes notariés ou que des intérêts sont dus en raison du retard de paiement. Dans ce cas, l'acheteur doit également s'acquitter de ses frais, qui font partie intégrante de la vente 32.

En ce qui concerne les modalités de paiement, le législateur OHADA prévoit que le paiement du prix est fait soit au siège de l'activité du vendeur, soit au lieu de la livraison si le prix est payable comptant ou si la livraison est effectuée contre remise de documents 33.

Le paiement doit avoir lieu à la date convenue entre les parties et l'acheteur ne peut subordonner son paiement à une démarche du vendeur. Par contre, si la vente implique un transport, le vendeur peut subordonner leur expédition ou la remise à l'acheteur du document qui les représente au paiement préalable du prix 34.

Par ailleurs, les parties peuvent prévoir que l'acheteur ne sera tenu de payer le prix qu'après avoir été mis en mesure d'examiner les marchandises. L'examen préalable des marchandises constitue une protection pour l'acheteur qui ne sera pas tenu de payer le prix tant qu'il ne s'est pas assuré, ne fût-ce que sommairement, de la conformité des marchandises 35.

L'acheteur est également tenu de prendre livraison des marchandises. Cette obligation implique, pour l'acheteur, d'accomplir les actes permettant au vendeur d'effectuer la livraison et de prendre possession des marchandises 36.</p>

<p>Par conséquent, lorsque la vente porte sur des produits réglementés nécessitant une autorisation ou lorsque la vente implique un transport, l'acheteur doit effectuer les formalités nécessaires et conclure les actes juridiques que l'opération impose 37.

Enfin, l'acheteur est, en principe, tenu de prendre possession physiquement des marchandises. Cette prise de livraison a pour conséquence qu'elle opère un transfert des risques 38. Préalablement à la prise de possession, l'acheteur devra examiner les marchandises ou les faire examiner par un tiers et décider s'il accepte ou non de retirer les marchandises en cas de défaut de conformité 39.

Puisque l'Acte uniforme relatif au droit commercial général a reconnu à l'acheteur le droit de refuser les marchandises après leur examen préalable, celui-ci a l'obligation de prendre les mesures raisonnables, eu égard aux circonstances, pour en assurer la conservation, et ce, jusqu'à leur reprise par le vendeur 40. Cette obligation de conservation peut être accomplie par l'acheteur ou par un tiers désigné à cet effet.

Si le vendeur tarde trop à récupérer les marchandises refusées par l'acheteur, le législateur OHADA autorise l'acheteur à vendre la marchandise et à retenir sur le produit de la vente un montant égal à ses frais de conservation 41.</p>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">J'accepte les conditions</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <input type="submit" name="inscription_acheteur" value="S'inscrire" id="inscription">


    </form>
    <!--  <form action="TraitementInscription.php" method="post"> -->





</body>

</html>