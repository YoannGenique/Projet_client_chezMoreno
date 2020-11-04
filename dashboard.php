<?php
session_start();

if (isset($_SESSION['mon_login']) && isset($_SESSION['mon_mot_de_passe'])){
?>
  <html>
    <body>
            <div>
                <p>Bonjour <?php echo $_SESSION['mon_login']; ?></p>
                <a href="/mysql/page.php"> page </a>
            </div>
    </body>
  </html>
<?php
} else {
    header('Location:  index.php');
}
?>
