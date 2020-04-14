<?php

    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////  

    //Traitement 

    if(isset($_POST['ajouter_vendeur'])){

        $nom_vendeur=$_POST['nom_vendeur'];
        $mail=$_POST['mail'];
        $mdp=$_POST['mdp'];

        $query="INSERT INTO vendeur(nom_vendeur,mail,mdp)VALUES(?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sss",$nom_vendeur,$mail,$mdp);
        $result = $statement->execute();

        //empêche la redirection vers un onglet vide après le traitement php
        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'admin.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin.php';</script>";
        }

        
    }

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="DELETE from vendeur where id_vendeur=?";
        $statement =$connexion->prepare($query);
        $statement->bind_param("i",$id); //i est le type de id, c'est int donc i 
        $result=$statement->execute();

        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - Record deleted!'); window.location.href = 'admin.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin.php';</script>";
        }


    }



?>