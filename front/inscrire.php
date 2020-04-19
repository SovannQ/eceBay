<?php 
    ////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","rien","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }
    ////////////////////////////////////////////////////////
    
    ///////////////////////////////////////////////////////////// INSCRIPTION 


    $erreur="";

    if(isset($_POST['inscription'])){

        $nom= $_POST['nom'];
        $mail= $_POST['mail'];
        $mdp = $_POST["mdp"];

        $query="SELECT COUNT(*) AS nb FROM vendeur WHERE mail='$mail'";
    
        $result = $connexion -> query($query);

        $row=$result->fetch_assoc();

        if ($nom=="" || $mdp=="" || $mail==""){

            $erreur.="UN OU PLUSIEURS CHAMPS SONT NULS";
        }

        if($erreur=="")
        {
            if($row['nb']=='0'){

                
                echo "<script type='text/javascript'>alert('Le compte est créé, veuillez vous connecter.'); window.location.href = 'inscription.php';</script>";

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



    if(isset($_POST['inscription_acheteur'])){

        ///////////////////////////////

        $nom= $_POST['nom'];
        $mail= $_POST['mail'];
        $mdp = $_POST["mdp"];

        ///////////////////////////////

        $nom_livraison=$_POST['nom_livraison'];
        $rue=$_POST['rue'];
        $ville=$_POST['ville'];
        $code_postal=$_POST['code_postal'];
        $pays=$_POST['pays'];
        //////////////////////////////

        $card = isset($_POST["card"])? $_POST["card"] :""; //réponse du boutton radio
        $numerocb=$_POST['numerocb'];
        $nom_carte=$_POST['nom_carte'];
        $dateexp=$_POST['date'];
        $code=$_POST['cvv'];

         //////////////////////////////

        $query="SELECT COUNT(*) AS nb FROM acheteur WHERE mail='$mail'";
    
        $result = $connexion -> query($query);

        $row=$result->fetch_assoc();

        if ($nom=="" || $mdp=="" || $mail=="" || $nom_livraison=="" || $rue=="" || $ville=="" || $code_postal=="" || $pays=="" || $card==""
         || $numerocb=="" || $nom_carte=="" || $dateexp=="" || $cvv=""){

            $erreur.="UN OU PLUSIEURS CHAMPS SONT NULS";
        }

        if($erreur=="")
        {
            if($row['nb']=='0'){

                
                echo "<script type='text/javascript'>alert('Le compte est créé, veuillez vous connecter.'); window.location.href = 'inscription.php';</script>";

                $sql="INSERT INTO acheteur(nom_acheteur,mail,mdp)VALUES(?,?,?)";
                $statement=$connexion->prepare($sql);
                $statement->bind_param("sss",$nom,$mail,$mdp);
                $result = $statement->execute();

               ///////////////////////////////////////////////// INSERER l'adresse dans la table adresse, avec le dernier ID inséré dans la première table

               $query_test1= " INSERT INTO `adresse` (`id_adresse`, `nom`, `rue`, `ville`, `code`, `pays`) VALUES (LAST_INSERT_ID(), '$nom_livraison', '$rue', '$ville', '$code_postal', '$pays')";
               $statement=$connexion->prepare($query_test1);
          
               $result = $statement->execute();


              
               $query_test2= "INSERT INTO info_paiement (id_info_paiement,type_carte,num_carte,nom_carte,dateexp,cvv) VALUES(LAST_INSERT_ID(),'$card','$numerocb','$nom_carte','$dateexp','$code')";
               $statement=$connexion->prepare($query_test2);
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

        ///var_dump($row['nb']); /// YEEEEEEEEEEEEEEES




    }


    ////////////////////////////////////////////////////////////////
    









?>