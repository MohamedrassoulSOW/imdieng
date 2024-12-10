<?php
    session_start();
   include'function.php';
    foreach(Users() as $U){
        if($_POST['email']==$U['email'] && $_POST['mdp']==$U['mdp']){
            $_SESSION['nom']=$U['nom'.' '.'prenom'];
            $_SESSION['id']=$U['id'];
            $_SESSION['role']=$U['role'];
            header('location: lecteur.php');
            break;
        }else{
            header('location: connexion.php');
        }
    }

?>