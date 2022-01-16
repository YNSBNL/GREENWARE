<!DOCTYPE html> <!-- type de document (html pr nous)-->
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

<br>
<br><br>
<br>
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
        <div class="footer3">
            <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
            <img src="logoo.png" alt="photo du logo" />

            <div class="content">
                <div class="barre">
                    <p>---------------------------------------------------</p>
                </div>
                <div class="photologo">
                    <div class="logofb">
                        <a href="accueil.html"> <img src="fb.png" alt="logo fb" /> </p></a>
                    </div>
                    <div class="logoinsta">
                        <a href="accueil.html"> <img src="insta.png" alt="logo insta" /> </a>
                    </div>
                    <div class="logotwitter">
                        <a href="accueil.html"> <img src="twitter.png" alt="logo twitter" /></a>
                    </div>
                    <div class="logolinkedin">
                        <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a>
                    </div>
                </div>
            </div>
            <div class="end">
                <label for="end">
                    <a href="#" class="white34"> Mentions légales</a> | <a href="#" class="white34"> Politique de confidentialité</a></label>
            </div>
        </div>
</body>

</html>