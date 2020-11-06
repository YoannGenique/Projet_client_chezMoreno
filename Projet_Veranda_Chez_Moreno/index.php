<?php
// redirection de la deco en destroy session
if(isset($_POST['deconexion'])){
    session_start();
session_destroy();
}
session_start();
// redirection si la personne est encore connecté
if(isset($_SESSION['login']) && isset($_SESSION['mdp'])){
    header('location:profil.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Moreno</title>
    <!--Lien vers le css-->
    <link rel="stylesheet" href="asset/style/style.css">
    <link rel="icon" type="image/png" href="asset/media/logo.png" />
</head>
<body>
    <!--En-tête de la page-->
    <header>
        <!--Logo de l'entreprise qui comprend une div logo-->
        <div class="logo" >
            <img src="asset/media/logo.png" alt="logo">
        </div>
        <!--Slogan de l'entreprise-->
        <h1> Chez Moreno ! Attendez vous à une véranda en béton ! </h1>
        <!--fin en-tête de la page -->
    </header>
     <!--Class display qui comprend ma flip card et mon espace pro-->
    <div class="display">
        <!--Flip card-->
        <!-- div flipcard - Conteneur à rabat-->
        <div class="flipcard">
            <!-- div flipcardinner - Position du conteneur cotés avant et arriere-->
            <div class="flipcardinner">
               <!-- Div flipcardfront - Positionnement avant-->
               <div class="flipcardfront">
                 <img src="asset/media/carreaux.jpg" width="865px" height="865px" alt="motifacarreaux">
                </div>
                <!--div flipcardback - style de l'arriere-->
                <div class="flipcardback">
                 <h3> Coordonnées</h3>
                 <p> 1 Rue Honoré de Balzac, <br>77130 Montereau-Fault-Yonne</p>
                 <p>Horaire <br> Du Lundi au Vendredi <br> 8h30 à 12h00 et de 13h à 17h </p>
                 <p>Téléphone <br> 01 64 58 96 31 <br> 06 85 96 36 35</p>
                </div>
            </div>
        </div>
        <!--Espace PRO--> 
        <!--Bordure qui comprend tout l'espace pro-->
        <div class="border">
            <!--div espace pro-->
            <div class="espacepro">
               <h2>Espace Profesionelle :</h2>
            </div>
            <!--Formulaire de connexion-->
            <!--div action qui prend en compte tout le formulaire de connexion-->
            <div class="action">
               <form action="verification.php" method="post">
                 <label><b>Email</b></label> <br>
                 <input type="email" name="u_mail" placeholder="Email Utilisateur" required="required"/><br>
                 <label><b>Mot de Passe</b></label> <br>
                 <input type="password" name="u_password" placeholder="Mot de passe" required="required"/><br>
                 <!-- div errir -->
                 <div class="error">
                     <!-- affiché l'erreur -->
                    <?php
                    if (isset($_GET['error'])){
                        echo '<p style="color: red">Mot de passe ou Email Incorrect</p>';
                    }
                    ?>
                    </div>
                 <button type="submit">Connexion</button>
                </form>
            </div>
        </div>
    </div> 
    <!--Photo du pied de page-->
    <div class="veranda">
        <img src="asset/media/veranda.jpg" width="1730px" width="493px" alt="uneveranda">
    </div>
</body>
</html>