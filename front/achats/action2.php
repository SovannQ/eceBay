<?php
include '../../front/vendeur_crud.php';
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////  
   

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        $query="DELETE from panier where id_article=?";
        $statement =$connexion->prepare($query);
        $statement->bind_param("i",$id); //i est le type de id, c'est int donc i 
        $result=$statement->execute();

        $query2 = "UPDATE article SET id_acheteur = NULL WHERE id_article = '$id'";
        $statement=$connexion->prepare($query2);
        $result = $statement->execute();


        if ($result)
        {   
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - article supprimé!'); window.location.href = 'panier.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'achats/action2.php';</script>";
        }
        
    }
    

    if(isset($_POST['ajouter_au_panier'])){

        

        


        $id_panier=$_SESSION['idacheteur'];
        $id_article=$_SESSION['id_article'];

        $query="INSERT INTO panier(id_panier,id_article)VALUES(?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("ss",$id_panier,$id_article);
        $result = $statement->execute();
        
        $update="UPDATE article SET id_acheteur='$id_panier' WHERE id_article = '$id_article'";
        $statement=$connexion->prepare($update);
        $statement->bind_param("s",$id_panier);
        $result = $statement->execute();

        $delete="SELECT id_article FROM panier";
        $statement2=$connexion->prepare($delete);
        $statement2->execute();
        $result2=$statement2->get_result(); 
        $row=$result2->fetch_assoc();
        //empêche la redirection vers un onglet vide après le traitement php
        if ($result)
        {   
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - article ajouté!'); window.location.href = '../panier.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'action2.php';</script>";
        }

        
    }
    
    
    
?>
