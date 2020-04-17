<?php session_start();

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

        $photo=$_FILES['image']['name'];
        $id_vendeur=$_SESSION['idvendeur'];
        $nom_article=$_POST['nom_article'];
        $description1=$_POST['description1'];
        $description2=$_POST['description2'];
        $categorie=$_POST['categorie'];
        $prix=$_POST['prix'];
        $type_vente=$_POST['type_vente'];
        
        $upload1="photos/".$photo;


        $query="INSERT INTO article(photo,nom_article,description1,description2,categorie,prix,type_vente)VALUES(?,?,?,?,?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sssssis",$photo,$nom_article,$description,$description2,$categorie,$prix,$type);
        $result = $statement->execute();
        move_uploaded_file($_FILES['image']['tmp_name'],$upload1);
        //move_uploaded_file($_FILES['image']['tmp_name'],$upload2);

        //empêche la redirection vers un onglet vide après le traitement php
        if ($result)
        {
        // Successful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Successful - article ajouté!'); window.location.href = 'vendeur.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'vendeur.php';</script>";
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
        echo "<script type='text/javascript'>alert('Successful - Record deleted!'); window.location.href = 'vendeur.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'vendeur.php';</script>";
        }


    }

    

   



?>