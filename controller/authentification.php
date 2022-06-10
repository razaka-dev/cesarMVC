<?php
require('../config.php') ;

//autoload
require_once(RACINE.'Autoloader.php') ;
Autoloader::register();

//ouverture de session
session_start() ;

//creation de l'objet
$verification = new FormClass() ;
$verification1 = new CustomForm('check') ;

//recuperation de donnees entrez
$verification->getField('email','mdp') ;


//verification de de champ email
if (isset($_POST['connect'])) {

      if ($verification->checkEmail() != false  AND $verification->checkPassword() == true ) {
            if ($verification1->getbox() == true) {

                $_SESSION['message'] = "Email et Mot de passe accepter" ;

                //redirection
                header('location:../index.php') ;
            }
            else {
                $_SESSION['message'] = "Teste robot non valide" ;

                //redirection
                header('location:../index.php') ;
            }
      }
      else {
            $_SESSION['message'] = "Verifier votre Email ou votre Mot de passe" ;

            //redirection
            header('location:../index.php') ;
      }

}


 ?>
