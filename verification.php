<?php
// user connecté redirigé vers son profil directement.
   /* if(session_start()){
       header('location:profil.php'); 
    }*/

    if (isset($_POST['login']) &&  isset($_POST['mdp']) ) {

        $login = $_POST['login'];
        $password = $_POST['mdp'];

        $pdo = new PDO ('mysql:host=localhost;dbname=chez_moreno;charset=utf8', 'root', '' );

        $query = $pdo->query("SELECT * FROM user WHERE u_mail='".$login."' and u_password='".$password."'");
        $user = $query->fetch();

        if ($user){
            session_start();
            $_SESSION['mon_login'] = $login;
            $_SESSION['mon_mot_de_passe'] = $password;

            header('Location:  dashboard.php');
        }else{
            echo 'error';
        }
    }
        /*
        if($_POST){
            // véririf dans la db si le user existe


            // si le mail existe dans la base donnée
            if(isset($user['u_mail'])){
                // var pour le mdp en md5
                $mdp=md5($_POST['u_password']);
                // verif de mdp comparer à celui de me db user
                if($mdp==$users['u_password']){
                    // on stock les infos dans session
                    $_SESSION['user']=$users;
                    header('location:profil.php');
                }
                else{
                    $error .= '<div class="incorrect">Mot de passe Incorrect</div>';
                }
            }
            else{
                $error .= '<div class="incorrect">Mail Incorrect</div>';
            }
        }
    }*/

?>


















?>