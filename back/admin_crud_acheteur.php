<?php session_start();

    $id_acheteur="";
    $nom_acheteur="";
    $mail="";
    $mdp="";
    $updated=false;
    
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","rien","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////  

    //Traitement 

    if(isset($_POST['ajouter_acheteur'])){

        $nom_acheteur=$_POST['nom_acheteur'];
        $mail=$_POST['mail'];
        $mdp=$_POST['mdp'];

        $query="INSERT INTO acheteur(nom_acheteur,mail,mdp)VALUES(?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sss",$nom_acheteur,$mail,$mdp);
        $result = $statement->execute();

        //empêche la redirection vers un onglet vide après le traitement php
        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - acheteur ajouté!'); window.location.href = 'admin_acheteur.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_acheteur.php';</script>";
        }

        
    }



    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="DELETE from acheteur where id_acheteur=?";
        $statement =$connexion->prepare($query);
        $statement->bind_param("i",$id); //i est le type de id, c'est int donc i 
        $result=$statement->execute();

        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - Record deleted!'); window.location.href = 'admin_acheteur.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_acheteur.php';</script>";
        }


    }

    if(isset($_GET['edit'])){

        $id_acheteur=$_GET['edit'];
        $query="SELECT * FROM acheteur WHERE id_acheteur=?";

        $statement=$connexion->prepare($query);
        $statement->bind_param("i",$id_acheteur);
        $statement->execute();

        $result=$statement->get_result();
        $row=$result->fetch_assoc();

        $id_acheteur=$row['id_acheteur'];
        $nom_acheteur=$row['nom_acheteur'];
        $mail=$row['mail'];
        $mdp=$row['mdp'];

        $updated = true;

    }

    if(isset($_POST['updated'])){

        $id_acheteur=$_POST['id_acheteur'];
        $nom_acheteur=$_POST['nom_acheteur'];
        $mail=$_POST['mail'];
        $mdp=$_POST['mdp'];

        $query = "UPDATE acheteur SET nom_acheteur=?, mail=?, mdp=? WHERE id_acheteur=?";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sssi",$nom_acheteur,$mail,$mdp,$id_acheteur);
        $result = $statement->execute();

        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - Record updated!'); window.location.href = 'admin_acheteur.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_acheteur.php';</script>";
        }


    }

   



?>