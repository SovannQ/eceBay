<?php include "paiement.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="admin_styles.css">
    <title>PAIEMENT</title>
</head>

<body>

    <form action="paiement.php" method="post"> 
                
                
                    <div class="form-group">
                        <input type="radio" name="card" value="visa">Visa
                        <input type="radio" name="card" value="mastercard">MasterCard
                        <input type="radio" name="card" value="americanexpress"> American Express</tr> 
                    </div>

                    <div class="form-group">
                    <input type="number" class="form-control" placeholder="N°de carte bancaire" name="numerocb">
                    <input type="text" class="form-control" placeholder="Nom du propriétaire" name="nom_carte">
                    <input type="date" class="form-control" placeholder="Date expiration" name="dateexp">
                    <input type="text" class="form-control" placeholder="CVV" name="cvv">
                    </div>


                <div class="modal-footer">
                    <input type="submit" class="btn btn-default" data-dismiss="modal" name="paiement">close
                </div>

                
    </form>
</body>

</html>