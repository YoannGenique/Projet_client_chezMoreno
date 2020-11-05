<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez moreno</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="media/logo.png" alt="logo">
        </div>
        <h1> Chez moreno ! Attendez vous à une veranda en béton ! </h1>
    </header>
    <div class="display">
    <div class="flipcard">
        <div class="flipcardinner">
            <div class="flipcardfront">
            <img src="media/carreaux.jpg" width="865px" height="865px" alt="motifacarreaux">
            </div>
            <div class="flipcardback">
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem perferendis numquam assumenda sed minima quae quas eos esse error, repellendus enim veritatis totam dolores nemo nulla temporibus harum voluptatum voluptate.</p>
            </div>
        </div>
    </div> 
    <div class="email">
        <div class="border">
            <div class="espacepro">
               <h2>Espace Profesionelle :</h2>
        <div class="action">
            <form action="index_v.php" method="post">
        
               <label><b>Email</b></label> <br>
               <input type="email" name="u_mail" placeholder="Email Utilisateur" required="required"/><br>
               <label><b>Mot de Passe</b></label> <br>
               <input type="password" name="u_password" placeholder="Mot de passe" required="required"/> <br>
            <div class="error">
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
    </div>
    </div>   
    <div class="veranda">
        <img src="media/veranda.jpg" width="1730px" width="493px" alt="uneveranda">
    </div>
</body>
</html>