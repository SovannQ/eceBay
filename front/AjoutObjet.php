<?php
    include  'admin_crud_article.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Ajouter un objet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="Inscription.css">
  <link rel="stylesheet" type="text/css" href="admin_styles.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  </script>

</head>

<body>


  

  <form action="admin_crud_article.php" method="post">
    <div class="container-fluid">
      <form align=center>
        <div class="text-center titre">
          <h1>Ajouter un objet à la vente</h1>
        </div>
        <table align=center>
          <tr>
            <div class="ecriture">
              <td>Catégories de l'objet: </td>
              <td>
            </div>
            <input type="radio" name="categorie" id="tresor" value="tresor">Ferraille ou trésor <br>
            <input type="radio" name="categorie" id="musee" value="musee"> Bon pour le musee <br>
            <input type="radio" name="categorie" id="vip" value="vip">Accessoire VIP<br>
            </td>
          </tr>
        </table>
      </form><br>



      <form align=center>

        <input type="text" class="form-control taille" name="nom_article" placeholder="Nom de l'article"><br>
        <label for="description1">Description de l'objet en une phrase</label><br>
        <textarea name=s"description1" rows="2" cols="40"> </textarea>
        <br>
        <label for="description2">Description de l'objet</label><br>
        <textarea name="description2" rows="7" cols="40"> </textarea></form>

        <table align=center>
          <tr>
            <div class="ecriture">
              <td>Type de vente souhaité:</td>
              <td>
            </div>
            <input type="radio" name="classe" id="achati" value="achati">Achat immédiat <br>
            <input type="radio" name="classe" id="bestoffer" value="bestoffer"> Meilleure offre <br>
            <input type="radio" name="classe" id="enchere" value="enchere">Enchère<br>
            </td>
          </tr>
        </table>

        
          <input type="submit" class="button soumettre" name="ajouter_article">Soumettre



        
    </div>
  </form>





</body>

</html>
