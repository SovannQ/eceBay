<?php 
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////
    
    ///////////////////////////////////////////////////////////// INSCRIPTION 


    $erreur="";
    
    if(isset($_POST['inscription'])){

        $nom= $_POST['nom'];
        $mail= $_POST['mail'];
        $mdp = md5($_POST["mdp"]);

        $query="SELECT COUNT(*) AS nb FROM vendeur WHERE mail='$mail'";
    
        $result = $connexion -> query($query);

        $row=$result->fetch_assoc();

        if ($nom=="" || $mdp=="" || $mail==""){

            $erreur.="UN OU PLUSIEURS CHAMPS SONT NULS";
        }

        if($erreur=="")
        {
            if($row['nb']=='0'){

                
                echo "<script type='text/javascript'>alert('Le compte est créé, veuillez vous connecter.'); window.location.href = 'inscription.html';</script>";

                $sql="INSERT INTO vendeur(nom_vendeur,mail,mdp)VALUES(?,?,?)";
                $statement=$connexion->prepare($sql);
                $statement->bind_param("sss",$nom,$mail,$mdp);
                $result = $statement->execute();
                
            }

            else{
                echo "<script type='text/javascript'>alert('Compte déjà enregistré, veuillez réessayer.'); window.location.href = 'inscrire.php';</script>";
    
    
            }

            

        }

        else
        {
            echo "<script type='text/javascript'>alert('$erreur'); window.location.href = 'inscrire.php';</script>";
        }

        ///var_dump($row['nb']); /// BORDEL ZEBI
        


    }





?>