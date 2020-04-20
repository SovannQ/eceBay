<?php session_start();

////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }

   
    ////////////////////////////////////////////////////////
    
    ///////////////////////////////////////////////////////////// INSCRIPTION 



if(isset($_POST['paiement'])){

    $numerocb=$_POST['numerocb'];
    $nom_carte=$_POST['nom_carte'];
    $dateexp=$_POST['dateexp'];
    $cvv=$_POST['cvv'];
    $card = isset($_POST["card"])? $_POST["card"] :"";
    $id_info_paiement=$_SESSION['idacheteur'];

   // $query="SELECT * FROM info_paiement where id_info_paiement=4 AND type_carte='mastercard' AND num_carte=888888888 AND nom_carte='MATHIAS' AND dateexp='2020-05-22' AND cvv='666'";
    $query="SELECT * FROM info_paiement where id_info_paiement='$id_info_paiement' AND type_carte='$card' AND num_carte='$numerocb' AND nom_carte='$nom_carte' AND dateexp='$dateexp' AND cvv='$cvv'";
    
    //on affichera l'adresse dans l'affichage en front
    $statement=$connexion->prepare($query);
    $result=$statement->execute();
    $result=$statement->get_result(); 
    $row=$result->fetch_assoc();

    if($row)
    {
        //$sql="DELETE * from article WHERE id_acheteur='$id_acheteur'";
        //$statement = $connexion->query($sql);
        
        //$sisi=$statement->fetch_assoc();
        //var_dump($row);
        echo "<script type='text/javascript'>alert('Successful - Article(s) acheté(s)!'); window.location.href = '../front/achats/achats.php';</script>";
        //Envoyer un mail

        $id_acheteur=$_SESSION['idacheteur'];
        var_dump($id_acheteur);
        
        $query="DELETE FROM panier USING panier LEFT JOIN article  ON (panier.id_article = article.id_article) WHERE article.typevente='immediat';";
        $statement =$connexion->prepare($query);
        $result2=$statement->execute();

        $query="DELETE FROM article WHERE typevente='immediat' AND id_acheteur='$id_acheteur'";
        $statement =$connexion->prepare($query);
        $result=$statement->execute();

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
            $var=$_SESSION['idacheteur'];
            $query="SELECT * from article WHERE id_acheteur = '$var' AND typevente = 'immediat'";
            $statement=$connexion->prepare($query);
            $statement->execute();
            $result=$statement->get_result();
            $mail->Body="Bonjour,
            voici la confirmation de votre commande #$rand chez ECEBay. Nous vous en remercions. Voici le récapitulatif de la commande :
                ";
     
            //peut etre afficher l'adresse avec id_acheteur 
            //récap des items, ceux du panier SELECT * FROM panier where id_acheteur = $id_acheteur;
            $mail->addAddress('sovannquaglieri@gmail.com');
            $mail->Send();


            $conf['show_php_errors'] = E_ALL & ~E_DEPRECATED;
            

    }
    else{

        var_dump($row);
        echo "pas ok";
    }
}




?>