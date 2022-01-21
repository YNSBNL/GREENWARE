<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_unset();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
    <title>Techsens</title>
</head>

<body>
    <?php
     if(!isset($_SESSION)){
        session_start();
     }
     if (isset($_SESSION['connected']) && $_SESSION['connected'] == true){
        include("./Composants/headerconnected.php");
            }
    else {include("./Composants/headerdeconnected.php");
    }
    ?>

    <div class="intro">
        <?php
        $x = "Catherine";
        echo "<p><center> Bienvenue utilisateur $x  ! </center></p>"
        ?>
    </div>
    <div class="gares">
        <p align="center" class="gare"> Merci de sélectionner une de vos stations/gares </p>
        <div class="lien-gares">
            <a href="corentin_celton.php"><img src="corentin-celton.jpg" class="buttongare1"></a>
            <a href="saint_placide.php"><img src="saint-placide.jpg" class="buttongare2"></a>
            <a href="gare_du_nord.php"><img src="gare_du_nord.jpg" class="buttongare3"></a>
        </div>
    </div>
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="footer6">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
        <img src="logoo.png" alt="photo du logo" />
        
        <div class="content">
            <div class="barre">
            <p>---------------------------------------------------</p></div>
            <div class="photologo">
            <div class="logofb">
                <a href="https://www.facebook.com/profile.php?id=100073322512659"> <img src="fb.png" alt="logo fb" /> </p></a></div>
            <div class="logoinsta">
                <a href="https://www.instagram.com/"> <img src="insta.png" alt="logo insta" /> </a></div>
            <div class="logotwitter">
                <a href="https://twitter.com/Techsens_"> <img src="twitter.png" alt="logo twitter" /></a></div>
            <div class="logolinkedin">
                <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a></div>
        </div></div>
            <div class="end">
                    <label for="end"> 
                        <a href="cgu.html"> Mentions légales et politique de cofidentialité</a></label></div>
    
    <div id="scrollUp">
            <a href="#haut" class="top">
                <img src="Haut.png" alt="photo bouton" class="img10" /></a>
        </div>
    </div>
</body>
</html>