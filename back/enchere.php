<?php session_start();

////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }

////////////////////////////////////////////////////////

if(isset($_POST['enchere']))
{/*
    $id_article=12;
    $id_acheteur=$_SESSION['idacheteur'];
    $offre=$_POST['offre'];
    var_dump($id_article);

    $query2="SELECT * FROM article WHERE id_acheteur = '$id_acheteur' AND id_article = '$id_article'";
    $statement2=$connexion->prepare($query2);
    $statement2->execute();
    $result2=$statement2->get_result(); 
    $row2=$result2->fetch_assoc();

    $prix = $row2['prix'];
    $datefin = $row2['datefin'];

    $query="SELECT * FROM enchere WHERE id_acheteur = '$id_acheteur' AND id_article='$id_article'";
    $statement=$connexion->prepare($query);
    $result = $statement->execute();
    $result=$statement->get_result(); 
    $row=$result->fetch_assoc();
    

    if($row)
    {
        
            $update="UPDATE enchere SET offre='$offre' WHERE id_acheteur='$id_acheteur' AND id_article= '$id_article'";
            $statement6=$connexion->prepare($update);
            $statement6->bind_param("i",$offre);
            $result6 = $statement6->execute();
        
        
    }
    
        $query="INSERT INTO enchere(id_article,id_acheteur,offre,prix,datefin)VALUES(?,?,?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sssss",$id_article,$id_acheteur,$offre,$prix,$datefin);
        $result = $statement->execute();
    
        
    
        
    

    header('location:../front/panier.php');
*/

$query="SELECT datefin FROM enchere WHERE datefin!='NULL'";
$statement=$connexion->prepare($query);
$result = $statement->execute();
$result=$statement->get_result(); 
$row=$result->fetch_assoc();
var_dump($row['datefin']);

$time = new DateTime();
var_dump($time);

if($row['datefin']<=$time)
{
    $max = "SELECT MAX(offre) from enchere";
    $statement9=$connexion->prepare($max);
    $result9 = $statement9->execute();
    $result9=$statement9->get_result(); 
    $row9=$result9->fetch_assoc();
    
    $max2 = "SELECT MAX(offre) from enchere WHERE offre < ( SELECT MAX( offre ) FROM enchere )";
    $statement7=$connexion->prepare($max2);
    $result7 = $statement7->execute();
    $result7=$statement7->get_result(); 
    $row7=$result7->fetch_assoc();
    
    var_dump($row9);
    var_dump($row7);
    $prixfinal = $row7['MAX(offre)'] + 1;
    var_dump($prixfinal);
}     


}


        


?>