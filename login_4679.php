<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Login</title>
</head>
<body>


    <div class="log">
        <h2>Login</h2>
        <section class="login-box">
            <div>
                <form action="verification.php" method="post">
                    <label><b>Email</b></label>
                    <input type="email" name="u_mail" placeholder="Email Utilisateur" required="required"/>
                    <label><b>Mot de Passe</b></label>
                    <input type="password" name="u_password" placeholder="Mot de passe" required="required"/>
                        <button type="submit">Connexion</button>
                </form>



            </div>



        </section>




    </div>
    
</body>
</html>