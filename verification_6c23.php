<?php
// user connecté redirigé vers son profil directement.
    if(session_start()){
       header('location:profil.php'); 
    }

    $pdo = new PDO('mysql:host=127.0.0.1; dbname:chez_moreno', 'root', '');

    if(isset($_POST['u_mail']) && isset($_POST['u_password'])){

        $password = md5($_POST['u_password']);

        // véririf dans la db si le user existe
        $query = $pdo->query("SELECT * FROM user WHERE u_mail='".$_POST['u_mail']."' and u_password='".$password."'");
        $user = $query->fetch();

        // si le mail existe dans la base donnée
        if(isset($user['u_mail'])){
            session_start();
            $_SESSION['user']=$user;
            header('location:profil.php');
        }
        else{
            header('location:error.php');
        }
    }
?>


















?>