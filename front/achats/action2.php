<?php
    session_start();
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////  
    
    if(isset($_POST['ajouter_au_panier'])){

        $prix=$_SESSION['vprix'];
        $id_panier=$_SESSION['id_panier'];
        $id_article=$_SESSION['id_article'];


        $query="INSERT INTO panier(id_panier,id_article,total)VALUES(?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sss",$id_panier,$id_article,$prix);
        $result = $statement->execute();
        

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
