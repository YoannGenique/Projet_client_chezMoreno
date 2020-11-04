<?php
session_start();
session_destroy();
if (isset($_SESSION['login']) && isset($_SESSION['mdp'])){
    header('Location:  dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="limiter">
    <div class="container" style="background-image: url('images/bg-01.jpg');">
        <div class="formulaire">

				<span class="title">
					Authentification
				</span>

            <form class="form" action="verification.php" method="post">
                <div class="input-class">
                    <input class="input-text" type="text" name="login" placeholder="Votre login">
                </div>

                <div class="input-class">
                    <input class="input-text" type="password" name="mdp" placeholder="Votre mot de passe">
                </div>

              <div class="button-login">
                  <button class="form-btn" type="submit">
                      Login
                  </button>
              </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
