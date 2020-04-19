<?php session_start();
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

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

        $id_vendeur=$_SESSION['idvendeur'];
        
    
        $prix=$_POST['prix'];
        $typevente=$_POST['typevente'];
        

        $query="INSERT INTO article (photo,photo2,id_vendeur,nom_article,description1,description2,categorie,prix,typevente)VALUES(?,?,?,?,?,?,?,?,?)";
        $statement=$connexion->prepare($query);
        $statement->bind_param("sssssssis",$photo,$photo2,$id_vendeur,$nom_article,$description1,$description2,$categorie,$prix,$typevente);
        $result = $statement->execute();
        

        move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
        move_uploaded_file($_FILES['photo2']['tmp_name'], $upload);
        header('location:vendeur.php');


        
        

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

    if(isset($_POST['submitphoto'])){

        $photo=$_FILES['photo']['name'];
        $upload="photos/".$photo;

        $id_vendeur=$_SESSION['idvendeur'];

        $upload="photos/".$photo;
        
        /////////////////////////////////////////////////////////////////////////// supprimer l'ancienne photo du dossier photos pour laisser place à la nouvelle
        $delete="SELECT photo FROM vendeur WHERE id_vendeur='$id_vendeur'";
        $statement2=$connexion->prepare($delete);
        $statement2->execute();
        $result2=$statement2->get_result(); 
        $row=$result2->fetch_assoc();

        $imagepath=$row['photo'];
        unlink("photos/".$imagepath); //supprime l'ancienne photo
        ///////////////////////////////////////////////////////////////////////////
        
        $query = "UPDATE vendeur SET photo=? WHERE id_vendeur='$id_vendeur'";
        $statement=$connexion->prepare($query);
        $statement->bind_param("s",$photo);
        $result = $statement->execute();

        move_uploaded_file($_FILES['photo']['tmp_name'], $upload);

        header("location:vendeur.php");





    }

    if(isset($_POST['submitbg'])){

        $bg=$_FILES['bg']['name'];
        $upload="photos/".$bg;

        $id_vendeur=$_SESSION['idvendeur'];

        $upload="photos/".$bg;
        
        /////////////////////////////////////////////////////////////////////////// supprimer l'ancienne photo du dossier photos pour laisser place à la nouvelle
        if($bg=NULL){

        $delete="SELECT bg FROM vendeur WHERE id_vendeur='$id_vendeur'";
        $statement2=$connexion->prepare($delete);
        $statement2->execute();
        $result2=$statement2->get_result(); 
        $row=$result2->fetch_assoc();

        $imagepath=$row['bg'];
        unlink("photos/".$imagepath); //supprime l'ancienne photo

        }
        
        ///////////////////////////////////////////////////////////////////////////
        
        $query = "UPDATE vendeur SET bg=? WHERE id_vendeur='$id_vendeur'";
        $statement=$connexion->prepare($query);
        $statement->bind_param("s",$bg);
        $result = $statement->execute();

        move_uploaded_file($_FILES['bg']['tmp_name'], $upload);

        header("location:vendeur.php");





    }



    

   



?>