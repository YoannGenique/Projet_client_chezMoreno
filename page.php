<?php
session_start();

if (isset($_SESSION['mon_login']) && isset($_SESSION['mon_mot_de_passe'])){
    ?>
    <html>
    <body>
    <div>
       hello
    </div>
    </body>
    </html>
    <?php
} else {
    header('Location:  index.php');
}
?>
