<?php

    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////  

    

    
    if(isset($_GET['article'])){
        $id_article=$_GET['article'];
        $query="SELECT * FROM article WHERE id_article=? ";
        $statement=$connexion->prepare($query);
        $statement->bind_param("i",$id_article);
        $statement->execute();
        $result=$statement->get_result();
        $row=$result->fetch_assoc();
        
        $vid_article=$row['id_article'];
        $vphoto=$row['photo'];
        $vphoto2=$row['photo2'];
        $vid_vendeur=$row['id_vendeur'];
        $vnom_article=$row['nom_article'];
        $vdescription=$row['description'];
        $vcategorie=$row['categorie'];
        $vprix=$row['prix'];
        $vtype=$row['type'];

    }
?>
