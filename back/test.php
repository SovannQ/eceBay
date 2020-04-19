<?php
        require_once('PHPMailer/PHPMailerAutoload.php');

$rand = rand ( 1 , 10000 );
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth =true;
$mail->SMTPSecure='ssl';
$mail->Host ='smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username ='sovannquaglieri@gmail.com';
$mail->Password = 'sossovan123';
$mail->setFrom('no-reply@ecebay.fr');
$mail->Subject="Confirmation de commande #$rand";
$mail->Body="Bonjour,
voici la confirmation de votre commande #$rand chez ECEBay. Nous vous en remercions. Voici le récapitulatif de la commande :
    <html>
<head>
<title>Calendrier des anniversaires pour Août</title>
</head>
<body>
<p>Voici les anniversaires à venir au mois d\'Août !</p>
<table>
<tr>
<th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
</tr>
<tr>
<td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
</tr>
<tr>
<td>Emma</td><td>26</td><td>Août</td><td>1973</td>
</tr>
</table>
</body>
</html>";

//peut etre afficher l'adresse avec id_acheteur 
//récap des items, ceux du panier SELECT * FROM panier where id_acheteur = $id_acheteur;
$mail->addAddress('sovannquaglieri@gmail.com');
$mail->Send();


$conf['show_php_errors'] = E_ALL & ~E_DEPRECATED;

?>