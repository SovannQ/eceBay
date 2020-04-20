<?php 
include '../front/vendeur_crud.php';

////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }

////////////////////////////////////////////////////////



if(isset($_GET['offre_acheteur']))
{
    $id_article=$_GET['offre_acheteur'];
    $query="SELECT * FROM article WHERE id_article=? ";
    $statement=$connexion->prepare($query);
    $statement->bind_param("i",$id_article);
    $statement->execute();
    $result=$statement->get_result();
    $row=$result->fetch_assoc();

    $vid_article=$row['id_article'];
    $_SESSION['pepito']=$vid_article;
}


if(isset($_POST['bouton']))
{
    $offre=$_POST['offre'];
    $id_article=$_SESSION['pepito'];

    var_dump($offre);
    var_dump($id_article);

    $query="UPDATE article SET offre=? WHERE id_article = '$id_article'";
    $statement=$connexion->prepare($query);
    $statement->bind_param("s",$offre);
    $result = $statement->execute();

    header('location:../front/panier.php');
}


if(isset($_POST['boutton']))
{
    $id_article=$_SESSION['pablo'];

    $query="DELETE FROM panier WHERE id_article='$id_article'";
    $statement =$connexion->prepare($query);
    $result=$statement->execute();


    $query="DELETE FROM article WHERE id_article='$id_article'";
    $statement =$connexion->prepare($query);
    $result=$statement->execute();

    echo "<script type='text/javascript'>alert('Successful - article acheté! Vous recevrez un mail bientôt.'); window.location.href = '../front/achats/achats.php';</script>";
}
?>