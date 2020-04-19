<?php 

  
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

   

    if(isset($_POST['ajouterarticle'])){
        
        $nom_article=$_POST['nom_article'];
        $description1=$_POST['description1'];
        $description2=$_POST['description2'];
        $categorie=$_POST['categorie'];
        $photo=$_FILES['photo']['name'];
        $photo2=$_FILES['photo2']['name'];
        

        
        $upload="photos/".$photo;

        $id_admin='0';
        
    
        $prix=$_POST['prix'];
        $typevente=$_POST['typevente'];
        

        $query="INSERT INTO article (photo,photo2,id_vendeur,nom_article,description1,description2,categorie,prix,typevente)VALUES(?,?,?,?,?,?,?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("ssissssis",$photo,$photo2,$id_admin,$nom_article,$description1,$description2,$categorie,$prix,$typevente);
        $result = $statement->execute();
        var_dump($result);
        if ($result)
        {

        // Successful popup message, redirected back to view contacts
        //echo "<script type='text/javascript'>alert('Successful - Record deleted!'); window.location.href = 'admin_article.php';</script>";
        }
        else
        {
        // Unsuccessful popup message, redirected back to view contacts
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'admin_article.php';</script>";
        }

        move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
        move_uploaded_file($_FILES['photo2']['tmp_name'], $upload);
        header('location:admin_article.php');

        
        

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