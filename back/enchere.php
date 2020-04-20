<?php 
include '../front/vendeur_crud.php';
////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","rien","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }

////////////////////////////////////////////////////////



if(isset($_GET['villa'])){
    $id_article=$_GET['villa'];
    $query="SELECT * FROM article WHERE id_article=? ";
    $statement=$connexion->prepare($query);
    $statement->bind_param("i",$id_article);
    $statement->execute();
    $result=$statement->get_result();
    $row=$result->fetch_assoc();

    $vid_article=$row['id_article'];
    $_SESSION['poto']=$vid_article;
    $vprix=$row['prix'];
    $_SESSION['prix']=$vprix;
    $vdatefin=$row['datefin'];
    $_SESSION['datefin']=$vdatefin;
    $vnom=$row['nom_article'];
    $_SESSION['nom_article']=$vnom;

}



if(isset($_POST['enchere']))
{

    $id_acheteur = (int)$_SESSION['idacheteur'];
    var_dump($id_acheteur);
    $offre=$_POST['offre'];
    $id_article=$_SESSION['poto'];
    var_dump($id_article);

    $query="SELECT * FROM enchere WHERE id_article = '$id_article'";
    $statement2=$connexion->prepare($query);
    $result2 = $statement2->execute();
    $result2=$statement2->get_result(); 
    $row=$result2->fetch_assoc();

    if($row['id_article']==$id_article )
    {
        var_dump($row['id_acheteur']);
        var_dump($id_acheteur);
        if($row['id_acheteur'] = $id_acheteur)
        {
            $queryy="UPDATE enchere SET id_acheteur=?,offre=? WHERE id_article = '$id_article'";
            $statement=$connexion->prepare($queryy);
            $statement->bind_param("ss",$id_acheteur,$offre);
            $result = $statement->execute();
        }
            else
        {
            $queryy="SELECT * FROM article WHERE nom_article= '$nom_article' AND id_vendeur = '$id_vendeur'";
            $statement2=$connexion->prepare($queryy);
            $result2 = $statement2->execute();
            $result2=$statement2->get_result(); 
            $row=$result2->fetch_assoc();

            $prix=$_SESSION['prix'];
            $nom_article=$_SESSION['nom_article'];
            $datefin=$_SESSION['datefin'];

            $query="INSERT INTO enchere (id_article,nom_article,id_acheteur,prix,offre,datefin)VALUES(?,?,?,?,?,?)";
            $statement=$connexion->prepare($query);
            $statement->bind_param("isiiis",$id_article,$nom_article,$id_acheteur,$prix,$offre,$datefin);
            $result = $statement->execute();
        }
        
        
    }
    
        
    

  //     header('location:../front/panier.php');
/*

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
*/

}


        


?>