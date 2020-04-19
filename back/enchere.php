<?php session_start();

////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }

////////////////////////////////////////////////////////

if(isset($_POST['enchere']))
{

    $id_acheteur=$_SESSION['idacheteur'];
    $id_article=$_SESSION['id_article'];
    $offre=$_POST['offre'];
    var_dump($id_acheteur);

    $query2="SELECT prix,datefin FROM article WHERE id_acheteur = '$id_acheteur' AND id_article = '$id_article'";
    $statement2=$connexion->prepare($query2);
    $statement2->execute();
    $result2=$statement2->get_result(); 
    $row2=$result2->fetch_assoc();

    $prix = $row2['prix'];
    $datefin = $row2['datefin'];

    $query="INSERT INTO enchere(id_article,id_acheteur,offre,prix,datefin)VALUES(?,?,?,?,?)";
    $statement=$connexion->prepare($query);
    $statement->bind_param("sssss",$id_article,$id_acheteur,$offre,$prix,$datefin);
    $result = $statement->execute();
    
    header('location:../front/panier.php');
}



?>