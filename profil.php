<?php
session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['mdp'])){
    header('location:index.php');
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
</head>
<body>
    <!--En-tête de la page-->
    <header>
        <!--Logo de l'entreprise qui comprend une div logo-->
        <div class="logo">
            <img src="asset/media/logo.png" alt="logo">
        </div>
        <!--Slogan de l'entreprise-->
        <h1> Chez moreno ! Attendez vous à une veranda en béton ! </h1>
        <!--fin en-tête de la page -->
    </header>
    <!--FLIPCARD-->
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
                 <p>Horaire <br> Du lundi au vendredi <br> 8h30 à 12h00 et de 13h à 17h </p>
                 <p>Téléphone <br> 01 64 58 96 31 <br> 06 85 96 36 35</p>
                </div>
                
            </div>
        </div>
               
    <!--BONJOUR-->
        <div class="bonjour">
          <h4>Bonjour<h4>
        </div>
        <!-- Form Déconexion -->
        <div class="deco"> 
            <form action="index.php" method="post">
                    <input type="submit" value="Déconexion" name="deconexion">
            </form> 
        </div>
    <!--Fermeture de la div display-->
    </div>
    <div class="titre">
        <h2>Documents techniques</h2>
    </div>
    <!--Ouverture d'un display pour les 2 cards-->
    <div class="displays">  
        <!--cards-->
        <div class="carte">
            <!--Image document-->
            <div class="image">
              <img src="asset/media/technique.jpg" width="300px" height="400px" alt="document technique">
              </div>
              <!--Texte document technique-->
              <div class="texte">
                  <p>Premier document technique</p>
               </div>
            </div>
        <!--cards-->
        <div class="carte">
            <!--Image document-->
            <div class="image">
                <img src="asset/media/technique.jpg" width="300px" height="400px" alt="document technique">
            </div>
            <!--Texte document technique-->
            <div class="texte">
                <p>Deuxième document technique</p>
            </div>
        <!--Fermeture du displays-->
        </div>
    </div>
</body>
</html>