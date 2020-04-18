<?php

    $id_article="";
    $nom_article="";
    $mail="";
    $mdp="";
    $updated=false;
    
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////  

    //Traitement 

   

    if(isset($_POST['ajouter_article'])){

        $nom_article=$_POST['nom_article'];
        $description1=$_POST['description1'];
        $description2=$_POST['description2'];
        $categorie=$_POST['categorie'];

        $photo=$_FILES['photo']['name'];
        $upload="photo_article/".$photo;

        $query="INSERT INTO article(nom_article,description1,description2,categorie,photo)VALUES(?,?,?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sssss",$nom_article,$description1,$description2,$categorie,$upload);
        $result = $statement->execute();
        
        move_uploaded_file($_FILES['photo']['tmp_name'], $upload);

        //header('')

        //empêche la redirection vers un onglet vide après le traitement php
        if ($result)
        {   
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - article ajouté!'); window.location.href = 'admin_crud_article.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_crud_article.php';</script>";
        }

        
    }


    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="DELETE from article where id_article=?";
        $statement =$connexion->prepare($query);
        $statement->bind_param("i",$id); //i est le type de id, c'est int donc i 
        $result=$statement->execute();

        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - Record deleted!'); window.location.href = 'admin_article.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_article.php';</script>";
        }


    }

    if(isset($_GET['edit'])){

        $id_article=$_GET['edit'];
        $query="SELECT * FROM article WHERE id_article=?";

        $statement=$connexion->prepare($query);
        $statement->bind_param("i",$id_article);
        $statement->execute();

        $result=$statement->get_result();
        $row=$result->fetch_assoc();

        $id_article=$row['id_article'];
        $nom_article=$row['nom_article'];
        $mail=$row['mail'];
        $mdp=$row['mdp'];

        $updated = true;

    }

    if(isset($_POST['updated'])){

        $id_article=$_POST['id_article'];
        $nom_article=$_POST['nom_article'];
        $mail=$_POST['mail'];
        $mdp=$_POST['mdp'];

        $query = "UPDATE article SET nom_article=?, mail=?, mdp=? WHERE id_article=?";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sssi",$nom_article,$mail,$mdp,$id_article);
        $result = $statement->execute();

        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - Record updated!'); window.location.href = 'admin_article.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_article.php';</script>";
        }


    }

   



?>