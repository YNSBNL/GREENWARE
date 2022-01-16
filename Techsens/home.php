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
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
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

    <div class="container2">
        <center>
            <p class="contacter2"> Votre Profil: </p>
        </center>
        <span>

            <div class="formulaire2">
                <form class="intro">
                    <p class="txt1"> Vos Informations Personnelles </p>

                    <?php

                    if (isset($_GET['Logout'])) {
                        if ($_GET['Logout'] == true) {
                            session_unset();
                            header("location: login.php");
                        }
                    } else if ($_SESSION['uname'] !== "") {
                        $user = $_SESSION['uname'];



                        // afficher un message
                        echo "<br>Bonjour $user, vous êtes connecté";
                    }
                    ?>
                    <br><br>
                    <a href="aide.php" class="button2">Information incorrecte ? Contactez-nous !</a>
                    <div class="texteleft">
        
                </form>

            </div>
    </div>
    <p class="pdp">Photo de profil : </p>
    <img src="anonyme.png" alt="photo de profil" class="img30" />

<div class="footer2">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
        <img src="logoo.png" alt="photo du logo" />
        
        <div class="content">
            <div class="barre">
            <p>---------------------------------------------------</p></div>
            <div class="photologo">
            <div class="logofb">
                <a href="accueil.html"> <img src="fb.png" alt="logo fb" /> </p></a></div>
            <div class="logoinsta">
                <a href="accueil.html"> <img src="insta.png" alt="logo insta" /> </a></div>
            <div class="logotwitter">
                <a href="accueil.html"> <img src="twitter.png" alt="logo twitter" /></a></div>
            <div class="logolinkedin">
                <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a></div>
        </div></div>
            <div class="end">
                    <label for="end"> 
                        <a href="#" class="white34"> Mentions légales</a> | <a href="#" class="white34"> Politique de confidentialité</a></label></div>
</div>


</body>

</html>








</html>