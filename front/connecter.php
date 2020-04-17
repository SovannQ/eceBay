<?php
    session_start(); //ouvrir la session   
    error_reporting(0);

    
////////////////////////////////////////////////////////
    // connexion à la DB (autre approche que le cours, plus simple)
    $connexion = new mysqli("localhost", "root","","ecebay");

    if($connexion->connect_error){
        die("Erreur de connexion.".$connexion->connect_error);
    }

   
    ////////////////////////////////////////////////////////
    
    ///////////////////////////////////////////////////////////// INSCRIPTION 

    
    if(isset($_POST['login'])){

        
        $mail=$_POST['mail'];
        $mdp=$_POST['mdp'];
        $check = isset($_POST["check"])? $_POST["check"] :""; //réponse du boutton radio


        if($check =="vendeur"){

            $sql="SELECT mail,mdp FROM vendeur WHERE mail='mp@edu.ece.fr' AND mdp='123'";
            
           
            $result = $connexion -> query($sql);
            $row=$result->fetch_assoc();
            
            if ($mdp=="" || $mail==""){

                echo "<script type='text/javascript'>alert('ERREUR - UN DES CHAMPS EST VIDE'); window.location.href = 'Inscription.php';</script>";
            }
            if($row)
            {

               
                
                $query="SELECT id_vendeur FROM vendeur WHERE mail='$mail'";

                $statement = $connexion->query($query);

                $sisi=$statement->fetch_assoc();
                $id_vendeur=$sisi['id_vendeur'];
                
                //var_dump($sisi['id_vendeur']);

                $_SESSION['idvendeur']=$id_vendeur; //syntaxe de session, pas de _ ???

                //var_dump($_SESSION['id_vendeur']);

                $_SESSION['mail']=$mail;
               
                header("location:vendeur.php");
                
            }

            
            else 
            {
                echo "<script type='text/javascript'>alert('ERREUR - COMPTE NON RECONNU, VEUILLEZ REESSAYEZ'); window.location.href = 'Inscription.php';</script>";
            }
          
        }

        if($check=="acheteur"){


            $sql="SELECT mail,mdp FROM acheteur WHERE mail='$mail' AND mdp='$mdp'";

            $result = $connexion -> query($sql);

            $row=$result->fetch_assoc();   

            if ($mdp=="" || $mail==""){

                echo "<script type='text/javascript'>alert('ERREUR - UN DES CHAMPS EST VIDE'); window.location.href = 'Inscription.php';</script>";
            }

            if($row){

                $_SESSION['mail']=$mail;
                header("location:vendeur.php");
            
            }
            else{
                
                echo "<script type='text/javascript'>alert('ERREUR - COMPTE NON RECONNU, VEUILLEZ REESSAYEZ'); window.location.href = 'Inscription.php';</script>";
                
            }
        }

        if($check=="admin"){


            $sql="SELECT mail,mdp FROM admin WHERE mail='$mail' AND mdp='$mdp'";

            $result = $connexion -> query($sql);

            $row=$result->fetch_assoc();   

            if ($mdp=="" || $mail==""){

                echo "<script type='text/javascript'>alert('ERREUR - UN DES CHAMPS EST VIDE'); window.location.href = 'Inscription.php';</script>";
            }

            if($row){

                $_SESSION['mail']=$mail;
                header("location: admin_welcome.html");
            
            }
            else{
                echo "<script type='text/javascript'>alert('COMPTE ADMIN NON RECONNU'); window.location.href = 'Inscription.php';</script>";
            }
        }


           
    }
?>
        

    